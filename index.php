<?php
require 'vendor/autoload.php';

use Telegram\Bot\Api;
// Esto es un comentario ok
$telegram = new Api('1231883463:AAFjcudIcpcB3MIvyYAodAsMpG_yf5JK4cs', true);

$updates = $telegram->getWebhookUpdates();
$message = $updates->getMessage();

$chatId = $message->getChat()->getId();
$enviedText = $message->getText();

if (isset($updates) & $updates <> null & $message <> null) {
    $response = $telegram->sendMessage([
        'chat_id' => "$chatId",
        'text' => "Gracias por escribirnos"
    ]);
    $response = $telegram->sendPhoto([
        'chat_id' => "$chatId",
        'photo' => 'https://siponsi.github.io/a.JPG',
        'caption' => 'Some caption'
    ]);
}
