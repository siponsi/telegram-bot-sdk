<?php
require 'vendor/autoload.php';
use Telegram\Bot\Api;

$telegram = new Api('1231883463:AAFjcudIcpcB3MIvyYAodAsMpG_yf5JK4cs', true);

// $response = $telegram->getMe();

// $botId = $response->getId();
// $firstName = $response->getFirstName();
// $username = $response->getUsername();
// echo "$botId $firstName $username";
$updates = $telegram->getWebhookUpdates();
$m=$updates->getMessage();
$ui=$updates->getUpdateId();
if (isset($ui) & $ui <> null){
    $response = $telegram->sendMessage([
        'chat_id' => '843856890',
        'text' => "$m"
    ]);

}
// $message= $updates->getMessage();

// $messageId = $response->getMessageId();
// $telegram
//    ->setAsyncRequest(true)
//    ->sendPhoto(['chat_id' => 'CHAT_ID', 'photo' => 'path/to/photo.jpg']);

// $response = $telegram->setWebhook(['url' => 'https://tbotsdk.herokuapp.com/1231883463:AAFjcudIcpcB3MIvyYAodAsMpG_yf5JK4cs/webhook']);
// $updates = $telegram->getWebhookUpdates();
// $messageId = $response->getMessageId();
// var_dump($messageId);
