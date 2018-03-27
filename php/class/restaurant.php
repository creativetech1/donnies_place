<?php
    
    class Restaurant {
        private $restaurant_id;
        private $name;
        private $address;
        private $phone;
        private $menu_id;
        
        public function __construct($restaurant_id, $name, $address, $phone, $menu_id) {
            $this->restaurant_id = $restaurant_id;
            $this->name = $name;
            $this->address = $address;
            $this->phone = $phone; 
            $this->menu_id = $menu_id;
        }
        
        public function setRestaurantId($menu_id) {
            $this->title = $menu_id; 
        }
        
        public function getRestaurantId() {
            return $this->$menu_id;
        }
        
        public function setName($itemName) {
            $this->title = $itemName; 
        }
        
        public function getName() {
            return $this->$itemName;
        }
        
        public function setAddress($description) {
            $this->description = $description; 
        }
        
        public function getAddress() {
            return $this->$description;
        }
        
        public function setPhone($price) {
            $this->price = $price ; 
        }
        
        public function getPhone() {
            return $this->$price;
        }
        
        public function setMenuId($category) {
            $this->category = $category; 
        }
        
        public function getMenuId() {
            return $this->$category;
        }
    }
?>