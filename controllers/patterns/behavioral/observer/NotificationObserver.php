<?php

require_once(__DIR__ . '/admin_interfaces.php');
require_once(__DIR__ . '/../../../../email_notification.php'); // Adjust the path as necessary

class UserDeletionNotificationObserver implements UserDeletionObserver {
    private $inbox;

    public function __construct($inbox) {
        $this->inbox = $inbox;
    }

    public function onUserDeleted($userId) {
        // Prepare the email content
        $subject = "User Deletion Notification";
        $body = "A user with ID $userId has been deleted.";

        // Send the email notification
        global $mail; // Assuming $mail is defined globally in email_notification.php
        $mail->setFrom($this->inbox->getEmailAddress(), 'Admin Notification');
        $mail->addAddress($this->inbox->getEmailAddress()); // Assuming you want to send the notification to yourself
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->send();

        echo "User with ID $userId was deleted.";
    }
}
