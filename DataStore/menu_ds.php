<?php
require('../data/menu.php');

class Menu_ds extends Menu {

  public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function insert(){
      
        $qry = "INSERT INTO menu_items (menu_item_id, item_name, description, price, category_id, special_id, day_of_week_id, menu_img) VALUES (?, ?, ?, ?, ?, ?, ? ,?)";

      if($stmt = $this->conn->prepare($qry)){
        $stmt->bind_param('ssssssss',
        $this->menu_item_id,
        $this->item_name,
        $this->description,
        $this->price,
        $this->category_id,
        $this->special_id,
        $this->day_of_week_id,
        $this->menu_img
        );

        $this->menu_item_id = $_POST['menu_item_id'];
        $this->item_name = $_POST['item_name'];
        $this->description = $_POST['description'];
        $this->price = $_POST['price'];
        $this->category_id = $_POST['category_id'];
        $this->special_id = $_POST['special_id'];
        $this->day_of_week_id = $_POST['day_of_week_id'];
        $this->menu_img = $_POST['menu_img'];
      }

      if($stmt->execute()){
        return "Records inserted successfully.";
      } 
      else{
        return "ERROR: Could not execute query: $sql. " . $conn->error;
      }

      // Close statement/connection
      $stmt->close();
      $conn->close();
    }


    
    
    
    
    
    public function selectSingle($key){
      $qry = 'SELECT * FROM menu_items WHERE item_name = ?';
      
      $stmt = $this->conn->prepare($qry);
      $stmt->bind_param('s', $key);
      $stmt->execute();
      
      $stmt->bind_result(
        $this->menu_item_id,
        $this->item_name,
        $this->description,
        $this->price,
        $this->category_id,
        $this->special_id,
        $this->day_of_week_id,
        $this->menu_img
      );

      $row = array();
      while ($stmt->fetch()) {
        array_push($row, $this->menu_item_id);
        array_push($row, $this->item_name);
        array_push($row, $this->description);
        array_push($row, $this->price);
        array_push($row, $this->category_id);
        array_push($row, $this->special_id);
        array_push($row, $this->day_of_week_id);
        array_push($row, $this->menu_img);
      }
      if (!empty($row)) {
          return $row;
      } else {
          return null;
      }

      // Close statement/connection
      $stmt->close();
      $conn->close();
    }





    public function selectAll(){
      
      $qry = 'SELECT * FROM menu_items';
      $stmt = $this->conn->prepare($qry);
      $stmt->execute();
      $stmt->store_result();
      $stmt->bind_result(
        $this->menu_item_id,
        $this->item_name,
        $this->description,
        $this->price,
        $this->category_id,
        $this->special_id,
        $this->day_of_week_id,
        $this->menu_img
      );

      $returnSet = array();
      $rowCount = 0;
      while ($stmt->fetch()) {
        $row = array();

        array_push($row, $this->menu_item_id);
        array_push($row, $this->item_name);
        array_push($row, $this->description);
        array_push($row, $this->price);
        array_push($row, $this->category_id);
        array_push($row, $this->special_id);
        array_push($row, $this->day_of_week_id);
        array_push($row, $this->menu_img);

        $rowCount++;

        array_push($returnSet, $row);
      }
      if ($rowCount > 0) {
          return $returnSet;
      } else {
          return null;
      }

      // Close statement/connection
      $stmt->close();
      $conn->close();
    }
}
?>