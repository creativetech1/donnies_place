<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donnie's Place</title>
    <?php
        $document_root = $_SERVER['DOCUMENT_ROOT'];
        require("$document_root/Applications/components/head.php");
    ?>
</head>

<body class="blue-grey darken-3">
       
    <?php
        require("$document_root/Applications/components/nav.php");
    ?>
    <div>
        <img class="responsive-img" src="/Applications/assets/img/restaurant1.jpg" alt="" style='width:100%; height:25em;' />
    </div>
  
  <?php

require('../DataStore/menu_ds.php');
require('../DataStore/config.php');
require('../Applications/MenuUtil.php');

  

  $db = db_connect();

  $menu = new menu_ds($db);
  $menuArr = $menu->selectAll();

  echo '<div class="container">';
  echo '<h2>Menu</h2>';
  echo buildMenuTable($menuArr);
  echo '</div>';
   ?>
<!-- ########################################## -->


</body>
</html>