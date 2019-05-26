<?php

namespace App\Http\Controllers;

use App\Example;
use App\Price;
use App\Service;
use Illuminate\Http\Request;
use Telegram\Bot\Api;

class HomePageController extends Controller
{
    public function index()
    {
        $examples = Example::where('is_on_main_page', '1')->orderBy('order')->get();
        $services = Service::select('title')->orderBy('order')->get();
        $prices = Price::select('price')->orderBy('price')->get();

        return view('layouts.app', compact('examples', 'prices', 'services'));
    }

    public function sendOrder(Request $request)
    {
        if ($request->ajax()) {
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

            $telegram = new Api('821617450:AAHo_uum0VxK6TlecAY7ufUjHICPOBiCrWw');
            $telegram->sendMessage([
                'chat_id' => '780013967',
                'text' => $data,
            ]);
            return $data;
        } else {
            return false;
        }
    }
}
