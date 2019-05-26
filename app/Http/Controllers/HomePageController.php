<?php

namespace App\Http\Controllers;

use App\Example;
use App\Price;
use App\Service;
use Illuminate\Support\Facades\Request;

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
        return $request;
    }
}
