<?php
require 'vendor/autoload.php';
use Telegram\Bot\Api;

$telegram = new Api('1231883463:AAFjcudIcpcB3MIvyYAodAsMpG_yf5JK4cs');

$response = $telegram->getMe();

$botId = $response->getId();
$firstName = $response->getFirstName();
$username = $response->getUsername();
echo "$botId $firstName $username";
// $telegram
//    ->setAsyncRequest(true)
//    ->sendPhoto(['chat_id' => 'CHAT_ID', 'photo' => 'path/to/photo.jpg']);

$updates = $telegram->getWebhookUpdates();
print_r($updates);