<?php

class CreditCard {
    private $number;
    private $cvv;
    private $expiration_month;
    private $expiration_year;

    function __construct($_number, $_cvv, $_expiration_month, $_expiration_year)
    {
      $this->number = $this->checkValidNumber($_number);
      $this->cvv = $this->checkValidCvv($_cvv);
      $this->expiration_month =  $_expiration_month;
      $this->expiration_year = $_expiration_year;
    }

    private function checkValidNumber($number){
        if(!is_numeric($number) || strlen($number) != 12) {
          throw new Exception('Il numero di carta inserito non è valido');
        }
        return $number;
      }
    
    private function checkValidCvv($cvv){
        if(!is_numeric($cvv) || strlen($cvv) != 3) {
          throw new Exception('Il codice CVV inserito non è valido');
        }
        return $cvv;
      }

    //SET
    public function setNumber($_number){
        $this->number = $_number;
    }

    public function setCvv($_cvv){
        $this->cvvr = $_cvv;
    }

    public function setExpiration_m($_expiration_month){
        $this->expiration_m = $_expiration_m;
    }

    public function setExpiration_y($_expiration_year){
        $this->expiration_y = $_expiration_year;
    }


    //GET
    public function getNumber(){
        return $this->number;
    }

    public function getCvv(){
        return $this->cvv;
    }

    public function getExpiration_month(){
        return $this->expiration_month;
    }

    public function getExpiration_year(){
        return $this->expiration_year;
    }

    }

?>