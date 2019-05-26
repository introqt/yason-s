<?php

namespace App\Http\Controllers;

use App\Example;
use App\Http\Requests\SendOrderRequest;
use App\Price;
use App\Service;
use Telegram\Bot\Api;

class HomePageController extends Controller
{
    public function index(Service $services, Price $prices)
    {
        $examples = Example::where('is_on_main_page', '1')->orderBy('order')->get();

        return view('layouts.app', compact('examples', 'prices', 'services'));
    }

    public function sendOrder(SendOrderRequest $request)
    {
        $name = $request->name ?? "имя не указано";
        $email = $request->email ?? "email не указан";
        $services = $request->services ?? "услуги не указаны";
        $budget = $request->budget ?? "бюджет не указан";
        $topic = $request->topic ?? "тема не указана";
        $message = $request->message ?? "дополнительного сообщения нет.";
        $data = "У вас новый заказ!\n\rЗаказчик: ${name}.\n\r";
        $data .= "Email: ${email}.\n\r";
        $data .= "Услуги: ${services}.\n\r";
        $data .= "Бюджет: ${budget}.\n\r";
        $data .= "Тема: ${topic}.\n\r";
        $data .= "Сообщение: ${message}.\n\r";

        $telegram = new Api(env("TELEGRAM_BOT_TOKEN"));
        $telegram->sendMessage([
            'chat_id' => env('TELEGRAM_CHAT_ID'),
            'text' => $data,
        ]);

        return $data;
    }
}
