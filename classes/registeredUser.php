<?php

require_once __DIR__."/user.php";

class RegisteredUser extends User {
    private $registered = true;

    function __constructs($_name, $_lastname, $registered) {
        parent::__construct($_name, $_lastname);
        $this->registered = $_registered;

    }

    public function setRegistered($_registered){
        $this->registered = $_registered;
      }
    
      public function getRegistered(){
        return $this->registered;
      }
      
      public function getDiscount(){
        return $this->discount;
      }
}


?>