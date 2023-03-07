<?php

declare(strict_types=1);

require_once './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required([
    'TWILIO_ACCOUNT_SID',
    'TWILIO_AUTH_TOKEN',
    'MESSAGING_SERVICE_SID',
]);

use Twilio\Rest\Client;

$twilio = new Client(
    $_ENV["TWILIO_ACCOUNT_SID"],
    $_ENV["TWILIO_AUTH_TOKEN"]
);

$message = $twilio
    ->messages
    ->create(
        "+4917643971069",
        [
            "body"                => "This is a test message",
            "messagingServiceSid" => $_ENV["MESSAGING_SERVICE_SID"],
        ]
    );

print $message->sid;
