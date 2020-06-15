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
$t=$m->getText();
$c=$m->getChat();
$ci=$c->getId();
if (isset($ui) & $ui <> null){
    $response = $telegram->sendMessage([
        'chat_id' => "$ci",
        'text' => "the stupid ot wrote this (el estudido de oti escribio esto) $t desde $ci"
    ]);
    $response = $telegram->sendPhoto([
        'chat_id' => "$ci",
        'photo' => 'https://siponsi.github.io/a.JPG',
        'caption' => 'Some caption'
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
