<?php
    
    class Employee {
        private $employee_id;
        private $first_name;
        private $last_name;
        private $email;
        private $phone_number;
        private $username;
        private $password;
        private $restaurant_id;
        
        public function __construct($employee_id, $first_name, $last_name, $email, $phone_number, $username, $password, $restaurant_id) {
            $this->employee_id = $employee_id; 
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email; 
            $this->phone_number = $phone_number;
            $this->username = $username; 
            $this->password = $password;
            $this->restaurant_id = $restaurant_id;
        }
        public function setEmployeeId($employee_id) {
            $this->employee_id = $employee_id; 
        }
        
        public function getEmployeeId() {
            return $this->$employee_id;
        }
        
        public function setFirstName($first_name) {
            $this->first_name = $first_name; 
        }
        
        public function getFirstName() {
            return $this->$first_name;
        }
        
        public function setLastName($last_name) {
            $this->last_name = $last_name; 
        }
        
        public function getLastName() {
            return $this->$last_name;
        }
        
        public function setEmail($email) {
            $this->email = $email ; 
        }
        
        public function getEmail() {
            return $this->$email;
        }
        
        public function setPhoneNumber($phone_number) {
            $this->phone_number = $phone_number; 
        }
        
        public function getPhoneNumber() {
            return $this->$phone_number;
        }
        
        public function setUsername($username) {
            $this->username = $username ; 
        }
        
        public function getUsername() {
            return $this->$username;
        }
        
        public function setPassword($password) {
            $this->password = $password; 
        }
        
        public function getPassword() {
            return $this->$password;
        }
        
        public function setRestaurantId($restaurant_id) {
            $this->restaurant_id = $restaurant_id; 
        }
        
        public function getRestaurantId() {
            return $this->$restaurant_id;
        }
    }
?>