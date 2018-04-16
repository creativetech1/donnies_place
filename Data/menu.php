<?php
    
    class Menu {
        private $menu_id;
        private $itemName;
        private $description;
        private $price;
        private $category;
        private $special;
        private $dayOfWeek;
        private $menu_img;
        
        public function __construct($itemName, $description, $price, $category, $special=NULL, $dayOfWeek=NULL, $menu_img=NULL) {
            
            $this->itemName = $title;
            $this->description = $description;
            $this->price = $price; 
            $this->category = $category;
            $this->special = $special; 
            $this->dayOfWeek = $dayOfWeek;
            $this->menu_img = $menu_img;
        }
        
        public function setItemName($itemName) {
            $this->title = $itemName; 
        }
        
        public function getItemName() {
            return $this->$itemName;
        }
        
        public function setDescription($description) {
            $this->description = $description; 
        }
        
        public function getDescription() {
            return $this->$description;
        }
        
        public function setPrice($price) {
            $this->price = $price ; 
        }
        
        public function getPrice() {
            return $this->$price;
        }
        
        public function setCategory($category) {
            $this->category = $category; 
        }
        
        public function getCategory() {
            return $this->$category;
        }
        
        public function setSpecial($special) {
            $this->special = $special ; 
        }
        
        public function getSpecial() {
            return $this->$special;
        }
        
        public function setDayOfWeek($dayOfWeek) {
            $this->dayOfWeek = $dayOfWeek; 
        }
        
        public function getDayOfWeek() {
            return $this->$dayOfWeek;
        }
        
        public function setMenuImage($menu_img) {
            $this->menu_img = $menu_img; 
        }
        
        public function getMenuImage() {
            return $this->$menu_img;
        }
    }
?>