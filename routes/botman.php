<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');
$data = array("Selam","Merhaba");

foreach ($data as $sku) {
    $botman->hears($sku, function ($bot) {
        $bot->reply('Selaam!');
    });
}


$botman->hears('Başla!', BotManController::class.'@startConversation');
