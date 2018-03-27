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

