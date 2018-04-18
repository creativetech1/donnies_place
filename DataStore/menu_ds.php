<?php
require('../data/menu.php');

class Menu_ds extends Menu {

  public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function insert(){
      
        $qry = "INSERT INTO menu_items (menu_id, itemName, description, price, category, special, dayOfWeek, menu_img) VALUES (?, ?, ?, ?, ?, ?, ? ,?)";

      if($stmt = $conn->prepare($qry)){
        $stmt->bind_param('ssssssss',
        $this->menu_id,
        $this->itemName,
        $this->description,
        $this->price,
        $this->category,
        $this->special,
        $this->dayOfWeek,
        $this->menu_img
        );

        $this->menu_id = $conn->real_escape_string($_POST['menu_id']);
        $this->itemName = $conn->real_escape_string($_POST['itemName']);
        $this->description = $conn->real_escape_string($_POST['description']);
        $this->price = $conn->real_escape_string($_POST['price']);
        $this->category = $conn->real_escape_string($_POST['category']);
        $this->special = $conn->real_escape_string($_POST['special']);
        $this->dayOfWeek = $conn->real_escape_string($_POST['dayOfWeek']);
        $this->menu_img = $conn->real_escape_string($_POST['menu_img']);
      }

      return $qry;
    }


    
    
    
    
    
    public function selectSingle($key){
      $qry = 'SELECT * FROM menu_items WHERE menu_id = ?';
      
      $stmt = $this->conn->prepare($qry);
      $stmt->bind_param('s', $key);
      $stmt->execute();
      
      $stmt->bind_result(
        $this->menu_id,
        $this->itemName,
        $this->description,
        $this->price,
        $this->category,
        $this->special,
        $this->dayOfWeek,
        $this->menu_img
      );

      $row = array();
      while ($stmt->fetch()) {
        array_push($row, $this->menu_id);
        array_push($row, $this->itemName);
        array_push($row, $this->description);
        array_push($row, $this->price);
        array_push($row, $this->category);
        array_push($row, $this->special);
        array_push($row, $this->dayOfWeek);
        array_push($row, $this->menu_img);
      }
      if (!empty($row)) {
          return $row;
      } else {
          return null;
      }
    }





    public function selectAll(){
      
      $qry = 'SELECT * FROM menu_items';
      $stmt = $this->conn->prepare($qry);
      $stmt->execute();
      $stmt->store_result();
      $stmt->bind_result(
        $this->menu_id,
        $this->itemName,
        $this->description,
        $this->price,
        $this->category,
        $this->special,
        $this->dayOfWeek,
        $this->menu_img
      );

      $returnSet = array();
      $rowCount = 0;
      while ($stmt->fetch()) {
        $row = array();

        array_push($row, $this->menu_id);
        array_push($row, $this->itemName);
        array_push($row, $this->description);
        array_push($row, $this->price);
        array_push($row, $this->category);
        array_push($row, $this->special);
        array_push($row, $this->dayOfWeek);
        array_push($row, $this->menu_img);

        $rowCount++;

        array_push($returnSet, $row);
      }
      if ($rowCount > 0) {
          return $returnSet;
      } else {
          return null;
      }
    }
}
?>