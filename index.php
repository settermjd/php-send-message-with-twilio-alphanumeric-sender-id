<?php

require_once './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required(['TWILIO_ACCOUNT_SID', 'TWILIO_AUTH_TOKEN', 'MESSAGING_SERVICE_SID']);

use Twilio\Rest\Client;

$sid = $_ENV["TWILIO_ACCOUNT_SID"];
$token = $_ENV["TWILIO_AUTH_TOKEN"];
$messagingServiceSID = $_ENV["MESSAGING_SERVICE_SID"];
$twilio = new Client($sid, $token);

$message = $twilio
    ->messages
    ->create(
        "+4917643971069",
        [
            "body" => "This is a test message",
            "messagingServiceSid" => $messagingServiceSID
        ]
    );

print($message->sid);
