<?php
require_once(__DIR__ . '/vendor/autoload.php');
require_once('/opt/lampp/htdocs/medicarecentre/controllers/patterns/behavioral/observer/UserDeletionNotificationObserver.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// configure mailslurp/mailslurp-client-php library
$config = MailSlurp\Configuration::getDefaultConfiguration()
    ->setApiKey('x-api-key', "0c82f9423337fa410661e35f6f80f251cec898f99381c112b9e932fecfba4e6f");
$inboxController = new MailSlurp\Apis\InboxControllerApi(null, $config);
// create an inbox
$inbox = $inboxController->createInboxWithDefaults();
echo "email adress=" .$inbox ->getEmailAddress();
// send an email
$sendOptions = new MailSlurp\Apis\InboxControllerApi(null,$config);
$options = new \MailSlurp\Models\CreateInboxDto();
$options->setName("Test inbox");
$options->setInboxType("SMTP_INBOX");
$inbox_smtp = $inboxController->createInboxWithOptions($options);

$access_details = $inboxController->getImapSmtpAccess($inbox_smtp->getId());
echo "\n email is " .$inbox ->getEmailAddress();
echo "\n smtp host  is " .$access_details ->getSecureSmtpServerHost() ."\n";
$mail = new PHPMailer(true);
// set mail server settings using the inbox access details
$mail->SMTPDebug = SMTP::DEBUG_SERVER;  
$mail->isSMTP();
$mail->Host       = $access_details->getSecureSmtpServerHost();
$mail->SMTPAuth   = true;
$mail->Username   = $access_details->getSecureSmtpUsername();
$mail->Password   = $access_details->getSecureSmtpPassword();
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = $access_details->getSecureSmtpServerPort();
//Recipients
    $mail->setFrom($inbox ->getEmailAddress(), $inbox -> getName());
    $mail->addAddress($inbox ->getEmailAddress());     //Add a recipient
     //Optional name

    //Content
    $mail->isHTML(true);                                
    $mail->Subject = 'Hi';
    $mail->Body    = 'Mary';

    $mail->send();
    echo 'Message has been sent';
    $wait_for_controller = new MailSlurp\Apis\WaitForControllerApi(null, $config);
    $email = $wait_for_controller->waitForLatestEmail($inbox->getId(), 120000, true);
    echo "\n body got " .$email ->getBody();
   
global $mail;





