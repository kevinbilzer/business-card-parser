<?php 

class ContactInfo{

   //member variables for storing extracted information from business card
   private $name;
   private $phoneNumber;
   private $emailAddress;
   private $card;

   //constructor for ContactInfo
   //params: full card info, extracted name, extracted phone number, extracted email
   function __construct($card, $name, $phoneNumber, $email){
      $this->card = $card;
      $this->name = $name;
      $this->phoneNumber = $phoneNumber;
      $this->emailAddress = $email;
   }

   //member variables accessors

   public function getName(){
      return $this->name;
   }

   public function setName($name){
      $this->name = $name;
   }

   public function getPhoneNumber(){
      return $this->phoneNumber;
   }

   public function setPhoneNumber($phoneNumber){
      $this->phoneNumber = $phoneNumber;
   }

   public function getEmailAddress(){
      return $this->emailAddress;
   }

   public function setEmailAddress($emailAddress){
      $this->emailAddress = $emailAddress;
   }

}

?>
