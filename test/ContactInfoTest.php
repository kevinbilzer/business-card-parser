<?php
require_once __DIR__ . "/../ContactInfo.php";

class ContactInfoTest extends PHPUnit_Framework_TestCase{

   function testNameAccessors(){
      $document = "ASYMMETRIK LTD
Mike Smith
Senior Software Engineer
(410)555-1234
msmith@asymmetrik.com";
      $name = "Mike Smith";
      $phoneNumber = "4105551234";
      $email = "msmith@asymmetrik.com";
      $contactInfo = new ContactInfo($document, $name, $phoneNumber, $email);
      $contactInfo->setName("Bob Brown");
      $this->assertEquals($contactInfo->getName(),"Bob Brown");
   }

   function testPhoneNumberAccessors(){
      $document = "ASYMMETRIK LTD
Mike Smith
Senior Software Engineer
(410)555-1234
msmith@asymmetrik.com";
      $name = "Mike Smith";
      $phoneNumber = "4105551234";
      $email = "msmith@asymmetrik.com";
      $contactInfo = new ContactInfo($document, $name, $phoneNumber, $email);
      $contactInfo->setPhoneNumber("1234567890");
      $this->assertEquals($contactInfo->getPhoneNumber(), "1234567890");
   }

   function testEmailAddressAccessors(){
      $document = "ASYMMETRIK LTD
Mike Smith
Senior Software Engineer
(410)555-1234
msmith@asymmetrik.com";
      $name = "Mike Smith";
      $phoneNumber = "4105551234";
      $email = "msmith@asymmetrik.com";
      $contactInfo = new ContactInfo($document, $name, $phoneNumber, $email);
      $contactInfo->setEmailAddress("bbrown@foobar.net");
      $this->assertEquals($contactInfo->getEmailAddress(), "bbrown@foobar.net");
   }

}

?>
