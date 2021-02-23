<?php 

    class User {
        public $name;
        public $lastname;
        public $nickname;
        public $age;
        public $gender;

        public function __construct(string $name, string $lastname, string $nickname, int $age, string $gender) {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->nickname = $nickname;
            $this->age = $age;
            $this->gender = $gender;
        }

        public function getName(){
            return $this->name;
        }
    
        public function getLastname(){
            return $this->lastname;
        }
    
        public function getNickname(){
            return $this->nickname;
        }
    
        public function getAge(){
            return $this->age;
        }

        public function getGender(){
            return $this->gender;
        }
    }

?>