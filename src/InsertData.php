<?php
namespace kimsien;
    class InsertData{
        private $name;
        private $gender;
        private $email;

        public function __construct($name,$gender,$email){
            $this->name = $name;
            $this->gender = $gender;
            $this->email = $email;
        }

        public function getName(){
            return $this->name;
        }
        
        public function getGender(){
            return $this->gender;
        }
        
        public function getEmail(){
            return $this->email;
        }

    }
