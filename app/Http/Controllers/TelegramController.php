<?php

namespace App\Http\Controllers;

use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function telegram()
    {
        return Telegram::setWebhook(['url' => 'https://2717654782c0.ngrok.io/1413668991:AAF53M9bmrp4sIODIhOcO2irNj4FLBKEQtQ/webhook']);

//        return Telegram::getMe();
//        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
//
//        $response = $telegram->getMe();
//        return $response;
//
//        $botId = $response->getId();
//        $firstName = $response->getFirstName();
//        $username = $response->getUsername();
    }

}
