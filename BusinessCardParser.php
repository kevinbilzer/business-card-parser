<?php 
require_once("ContactInfo.php");

class BusinessCardParser{
   
   //constant variables used during extraction
   private $INVALID_NAMES = array('engineer','developer','analyst','ltd','technologies');
   private $FAX = 'fax';
   private $EMAIL_TOKEN = '@';
   private $PHONE_NUMBER_LENGTH = 10;
   private $NEW_LINE = "\n";

   //Param: Full card information
   //Description: This function parses and extracts the name from the business card
   //Functionality: Strips the passed in card of all newline characters which creates an array, iterates through the array, 
   //               Strip each line of the spaces, Then checks to see if each token of each line is a "Valid Name" or not.
   //Result: If the card line does not have a token that is "Invalid", Return that card line
   public function extractName($card){
      $cardLinesArray = explode($this->NEW_LINE, $card);
      $bool = true;
      foreach($cardLinesArray as $cardLine){
         $cardLineArray = explode(" ", $cardLine);
         foreach($cardLineArray as $cardToken){
            if(!in_array(strtolower($cardToken), $this->INVALID_NAMES) && !empty($cardToken)){
               $bool = false;
            }
            else{
               $bool = true;
            }
         }
         if($bool === false){
            return $cardLine;
         }
      }
   }

   //Param: Full card information
   //Description: This function parses and extracts the email address from the business card
   //Functionality: Strips the passed in card of all newline characters which creates an array, iterates through the array, and checks if the 
   //               card line has the special email token
   //Result: If the card line has the special email token, Return that card line
   public function extractEmailAddress($card){
      $cardLinesArray = explode($this->NEW_LINE, $card);
      foreach($cardLinesArray as $cardLine){
         if(strpos($cardLine, $this->EMAIL_TOKEN)){
            return $cardLine;
         }
      }
   }

   //Param: Full card information
   //Description: This function parses and extracs the phone number from the business card
   //Functionality: Strips the passed in card of all newline characters which creates an array, iterates through the array and checks to see
   //               if the card line has the special fax word, if it does not then every character in the card line that is not a number
   //               is replaced using regex
   //Result: If the length of the card line is greater than or equal to the length declared for a phone number, Return that card line
   public function extractPhoneNumber($card){
      $cardLinesArray = explode($this->NEW_LINE, $card);
      foreach($cardLinesArray as $cardLine){
         if(stripos($cardLine, $this->FAX) === false){
            $cardLine = preg_replace('/[^0-9]/', '',$cardLine);
            if(strlen($cardLine) >= $this->PHONE_NUMBER_LENGTH){
               return $cardLine;
            }
         }
      }
   }

   //Param: Full card information
   //Description: This function is used to parse and extract information from a business card
   //Functionality: Creates a ContactInfo object using information extracted from the business card
   //Result: Returns a ContactInfo object
   public function getContactInfo($card){
      return (new ContactInfo($card, $this->extractName($card), 
         $this->extractPhoneNumber($card), $this->extractEmailAddress($card)));  
   }
}  

?>
