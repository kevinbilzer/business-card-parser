<?php
require_once __DIR__ . "/../BusinessCardParser.php";

class BusinessCardParserTest extends PHPUnit_Framework_TestCase{

   function testExtractName(){
      $parser = new BusinessCardParser();
      $name = $parser->extractName("ASYMMETRIK LTD
Mike Smith
Senior Software Engineer
(410)555-1234
msmith@asymmetrik.com");
      $this->assertEquals($name, "Mike Smith");
   }

   function testExtractEmailAddress(){
      $parser = new BusinessCardParser();
      $email = $parser->extractEmailAddress("ASYMMETRIK LTD
Mike Smith
Senior Software Engineer
(410)555-1234
msmith@asymmetrik.com");
      $this->assertEquals($email, "msmith@asymmetrik.com");
   }

   function testExtractPhoneNumber(){
      $parser = new BusinessCardParser();
      $phoneNumber = $parser->extractPhoneNumber("ASYMMETRIK LTD
Mike Smith
Senior Software Engineer
(410)555-1234
msmith@asymmetrik.com");
      $this->assertEquals($phoneNumber, "4105551234");
   }

   function testGetContactInfo(){
      $parser = new BusinessCardParser();
      $contactInfo = $parser->getContactInfo("ASYMMETRIK LTD
Mike Smith
Senior Software Engineer
(410)555-1234
msmith@asymmetrik.com");
      $this->assertInstanceOf('ContactInfo', $contactInfo);
   }

}
?>
