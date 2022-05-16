<?php

class User {
    private $firstname;
    private $lastname;
    private $email;
    protected $discount = 0;
    private $creditcard;


    function __construct($_firstname, $_lastname) {
        $this->firstname = $_firstname;
        $this->lastname = $_lastname;
    }

    public function setCreditCard($_number, $_cvv, $_expiration_month, $_expiration_year){
        try {
          $this->card = new CreditCard($_number, $_cvv, $_expiration_month, $_expiration_year);
        } catch (Exception $e) {
          echo $e->getMessage();
        }
    }

    //SET
    public function setFirstname($_firstname){
    $this->firstname = $_firstname;
    }

    public function setLastname($_lastname){
    $this->lastname = $_lastname;
    }

    public function setMail($_email){
    $this->mail = $_email;
    }


    //GET
    public function getFirstname(){
    return $this->firstname;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function getMail(){
        return $this->email;
    }

    public function getDiscount(){
        return $this->discount;
    }
    }

?>