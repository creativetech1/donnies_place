<?php

function buildMenuTable($dataSet){



 $tblMenu = "<table  class='cleanTbl'>";

 foreach ($dataSet as $row) {

   $tblMenu = $tblMenu."<tr class='cleanTbl'>";

   foreach($row as $col){

     $tblMenu = $tblMenu."<td class='cleanTbl'>$col</td>";

   }
   $tblMenu = $tblMenu."</tr>";

 }
 $tblMenu = $tblMenu."</table>";


 return $tblMenu;
}
?>