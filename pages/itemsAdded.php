<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Items Added</title>
</head>
<body>
   <h1>Item to be added to the menu.</h1>
   <br>
   <div style="margin-left: 2%;">
        Category =  <?//php echo $_POST["category"]; ?>.<br>
        Title =  <?//php echo $_POST["title"]; ?>. <br>
        Description =  <?//php echo $_POST["description"]; ?>. <br>
        Price =  $<?//php echo $_POST["price"]; ?>.
    </div>   
</body>
</html>-->


<?php
require(menuClass.php);

$menu = new MenuClass($_POST["title"], $_POST["category"], $_POST["description"], $_POST["price"]);

$output =   $menu->getTitle().':'.
            $menu->getDescription().':'.
            $menu->getPrice().':'.
            $menu->getCategory().
            PHP_EOL;

$file = file_put_contents('menuItems.txt', $output, FILE_APPEND | LOCK_EX);
?>