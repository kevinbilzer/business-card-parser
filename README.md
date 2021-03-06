# OCR Business Card Parser
**By Kevin Bilzer**

### Interface Specification

**ContactInfo**
- String **getName()** : returns the full name of the individual (eg. John Smith, Susan Malick)
- String **getPhoneNumber()** : returns the phone number formatted as a sequence of digits
- String **getEmailAddress()**: returns the email address

**BusinessCardParser**
- ContactInfo **getContactInfo(String document)** 

### Version Specification

- PHP version: 5.6.31
- PHPUnit version: 5.7.9

### Run/Build

- Clone the repository  
```
   $ git clone git@github.com:kevinbilzer/business-card-parser.git 
```
### Testing

**Run all Unit Tests**
- Run 'phpunit' command in business-card-parser directory  
```
    $ phpunit
```
**Run a specific Unit Test**
- From business-card-parser directory, run 'phpunit test/{name of test}.php'  
```    
    $ phpunit test/{name of test}
```
**Run Functionality Test with given examples**
- From business-card-parser directory, navigate to the test directory, run 'php FunctionalityTest.php'  
```
    $ cd test/
    $ php FunctionalityTest.php
```
