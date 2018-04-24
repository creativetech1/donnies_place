<form action="#">
    <div class="categories">
        <?php   echo       '<select class="browser-default blue-grey darken-3 white-text" name="category">
                      <option value="" disabled selected>Choose a category</option>
                      <option value="1">Breakfast</option>
                      <option value="2">Lunch</option>
                      <option value="3">Dinner</option>
                    </select>'; ?>
    </div>
</form>



<?php
$query = "SELECT category FROM categories";

?>




    <?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
if(isset($_POST['category']) && isset($_POST['item_name']) && isset($_POST['price']) && isset($_POST['description'])) {

require("$document_root/components/dbConnect.php");

require("$document_root/components/addItem.php");

$category = test_input($_POST['category']);
$item_name = test_input($_POST['item_name']);
$price = test_input($_POST['price']);
$description = test_input($_POST['description']);
$special = test_input($_POST['special']);
$day_of_week = test_input($_POST['day_of_week']);

$item = new MenuItem($item_name, $description, $price, $category, $special, $day_of_week, $menu_img);

$item_name = $item->getItemName();
$description = $item->getDescription();
$price = $item->getPrice();
$category = $item->getCategory();
$special = $item->getSpecial();
$day_of_week = $item->getDayOfWeek();

if ($conn->connect_error) {
die('Connection failed: ' . $conn->connect_error);
} else {
$sql = "INSERT INTO menu_items(item_name, description, price, special, day_of_week) VALUES ('$item_name', '$description', '$price', '$special', '$day_of_week')";
}

if ($conn->multi_query($sql) === TRUE) {
echo "New records created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>






<!-- ___________________________________________________________________________________ -->

<!-- item added -->



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donnie's Place</title>
    <?php
        $document_root = $_SERVER['DOCUMENT_ROOT'];
        require("$document_root/components/head.php");
    ?>
</head>

<body class="blue-grey darken-3">

    <?php
        require("$document_root/components/nav.php");
    ?>

    <div>
        <img class="responsive-img" src="/img/main.PNG" alt="" style='width:100%; height:25em;' />
    </div>

    <?php
        require("$document_root/components/addItem.php");
        require("$document_root/components/footer.php");
        require("$document_root/js/scripts.php");
    ?>

</body>

</html>



<!-- ______________________________________________________________________  -->


<!-- the_menu -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <?php
        $document_root = $_SERVER['DOCUMENT_ROOT'];
        require("$document_root/components/head.php");
    ?>
</head>

<body class="blue-grey darken-3">

    <?php
        require("$document_root/components/nav.php");
    ?>

        <div>
            <img class="responsive-img" src="/img/main.PNG" alt="" style='width:100%; height:25em;' />
        </div>
        
        <div class="container">

        <?php
        require("$document_root/components/dbConnect.php");

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['item_name']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['category'])) {
                
            // Prepare an insert statement
            $sql = "INSERT INTO menu_items (item_name, price, description, special_id, day_of_week_id, category_id) VALUES (?, ?, ?, ?, ?, ?)"; 

            if($stmt = $conn->prepare($sql)){
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("sdsiii", $item_name, $price, $description, $special_id, $day_of_week_id, $category_id);

                // Escape user inputs for security and Set parameters
                $item_name = $conn->real_escape_string($_REQUEST['item_name']);
                $price = $conn->real_escape_string($_REQUEST['price']);
                $description = $conn->real_escape_string($_REQUEST['description']);
                $category_id = $conn->real_escape_string($_REQUEST['category']);
                $special_id = $conn->real_escape_string($_REQUEST['specials']);
                $day_of_week_id = $conn->real_escape_string($_REQUEST['day_of_week']);

                if($stmt->execute()){
                    echo "Records inserted successfully.";
                } else{
                    echo "ERROR: Could not execute query: $sql. " . $conn->error;
                }
            } else{
                echo "ERROR: Could not prepare query: $sql. " . $conn->error;
            }

            // Close statement
            $stmt->close();
            
            // Close connection
            $conn->close();
                
            }
        }
        ?>
            
        </div>

        <?php
        require("$document_root/components/footer.php");
        require("$document_root/js/scripts.php");
    ?>
</body>

</html>