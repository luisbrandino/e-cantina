<?php

namespace Foodboard;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class CheckoutService
{

    function sendOrderEmail($subject, $cartItemsArray, $shippingAmount, $customerDetailsArray, $recipientArr, $recipientCCArr, $recipientBCCArr = Config::BCC_EMAIL)
    {
        require_once __DIR__ . '/../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require_once __DIR__ . '/../../vendor/phpmailer/phpmailer/src/Exception.php';
        require_once __DIR__ . '/../../vendor/phpmailer/phpmailer/src/SMTP.php';
        $mail = new PHPMailer();

        require_once __DIR__ . '/../resource/mail/order-confirmation.php';
        $emailBodyHtml = getOrderBody($cartItemsArray, $customerDetailsArray, $shippingAmount);
        // set the recipient (To email address) generally the admin

        foreach ($recipientArr as $recipient) {
            $mail->AddAddress($recipient);
        }

        foreach ($recipientCCArr as $ccRecipient) {
            $mail->AddCC($ccRecipient);
        }

        $mail->isHTML(true);
        $mail->Subject = Config::ORDER_EMAIL_SUBJECT;

        require_once __DIR__ . '/../resource/mail/order-confirmation.php';
        $emailBodyHtml = getOrderBody($cartItemsArray, $customerDetailsArray, $shippingAmount);
        $mail->Body = $emailBodyHtml;
        $replyToEmail = Config::SENDER_EMAIL;
        $replyToName = Config::SENDER_NAME;
        $mail->setFrom(Config::SENDER_EMAIL, Config::SENDER_NAME);
        $mail->addReplyTo($replyToEmail, $replyToName);
        $mailResult = $mail->send();

        return $mailResult;
    }


    function sanitizeEmails($emailArray)
    {
        $cleanEmailArray = array();
        foreach ($emailArray as $email) {
            $cleanEmail = trim($email);
            if (! empty($cleanEmail)) {
                filter_var($cleanEmail, FILTER_SANITIZE_EMAIL);
                $cleanEmailArray[] = $cleanEmail;
            }
        }
        return $cleanEmailArray;
    }

    function getToken()
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet) - 1;
        for ($i = 0; $i < 17; $i ++) {
            $token .= $codeAlphabet[mt_rand(0, $max)];
        }
        return $token;
    }
}