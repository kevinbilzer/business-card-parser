# OCR Business Parser
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

### Testing

**Run all Unit Tests**
- Run 'phpunit' command in business-card-parser directory

**Run a specific Unit Test**
- From business-card-parser directory, run 'phpunit test/{name of test}.php'

**Run Functionality Test with given examples**
- From business-card-parser directory, navigate to the test directory, run 'php FunctionalityTest.php'
