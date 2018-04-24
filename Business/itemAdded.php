<?php
require('../DataStore/menu_ds.php');
require('../DataStore/config.php');


$db = db_connect();
$item = new menu_ds($db);

$itemDetails = $item->insert();

header('Location: ../Applications/theMenu.php');


?>