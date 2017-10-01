<?php 

require_once __DIR__ . "/../BusinessCardParser.php"; 

$parser = new BusinessCardParser();
$contactInfo = $parser->getContactInfo("
Arthur Wilson
Software Engineer
Decision & Security Technologies
ABC Technologies
123 North 11th Street
Suite 229
Arlington, VA 22209
Tel: +1 (703) 555-1259
Fax: +1 (703) 555-1200
awilson@abctech.com");

echo "Name : " . $contactInfo->getName() . "\n";
echo "Phone : " . $contactInfo->getPhoneNumber() . "\n";
echo "Email : " . $contactInfo->getEmailAddress() . "\n";
echo "\n";

$contactInfo = $parser->getContactInfo("
ASYMMETRIK LTD
Mike Smith
Senior Software Engineer
(410)555-1234
msmith@asymmetrik.com");

echo "Name : " . $contactInfo->getName() . "\n";
echo "Phone : " . $contactInfo->getPhoneNumber() . "\n";
echo "Email : " . $contactInfo->getEmailAddress() . "\n";
echo "\n";

$contactInfo = $parser->getContactInfo("
Foobar Technologies
Analytic Developer
Lisa Haung
1234 Sentry Road
Columbia, MD 12345
Phone: 410-555-1234
Fax: 410-555-4321
lisa.haung@foobartech.com");

echo "Name : " . $contactInfo->getName() . "\n";
echo "Phone : " . $contactInfo->getPhoneNumber() . "\n";
echo "Email : " . $contactInfo->getEmailAddress() . "\n";
?>
