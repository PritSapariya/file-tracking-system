<?php
require 'PHP\vendor\nexmo\client-core\src\Account\Config.php';
require 'PHP\vendor\autoload.php';

$basic  = new \Nexmo\Client\Credentials\Basic('69c89f58', 'DQIO0UpNFjypxcjK');
$client = new \Nexmo\Client($basic);



try {
    $message = $client->message()->send([
        'to' => '918347183561',
        'from' => 'Acme Inc',
        'text' => 'A text message sent using the Nexmo SMS API'
    ]);
    $response = $message->getResponseData();

    if($response['messages'][0]['status'] == 0) {
        echo "The message was sent successfully\n";
    } else {
        echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
    }
} catch (Exception $e) {
    echo "The message was not sent. Error: " . $e->getMessage() . "\n";
}   