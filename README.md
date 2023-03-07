# Send an SMS Without a Phone Number using an Alphanumeric Sender ID

This is a small project that shows how to send an SMS using an Alphanumeric Sender ID with Twilio.
It's to support [the "How to Send SMS Without a Phone Number Using Alpha Sender and PHP" tutorial](https://www.twilio.com/blog/send-sms-without-phone-number-using-alpha-sender-and-php) on the Twilio blog.

## Installation

Clone the project, change into the source directory, and install PHP's dependencies:

```bash
git clone git@github.com:settermjd/php-send-message-with-twilio-alphanumeric-sender-id.git
cd php-send-message-with-twilio-alphanumeric-sender-id
composer install
```

After that, set the 3 required environment variables, as outlined in the "_Set the required environment variables_" section of the tutorial, and in _index.php_ and replace `<YOUR PHONE NUMBER>` with your mobile/cell phone number.

## Usage

To use the project, run the following command:

```bash
php index.php
```

## Have a Question?

If you have any questions, DM me on Twitter or email me matthew[at]matthewsetter.com.