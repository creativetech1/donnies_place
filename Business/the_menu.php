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