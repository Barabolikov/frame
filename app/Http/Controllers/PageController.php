<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function shop() {
        $tovar = [['Яблуко',550,'Білий налив'], ['Груша', 100, 'Cолодка'], ['Морква',70, 'Опис']];
        return view('shop', compact('tovar'));
    }
    public function home() {
        return view('home');
    }
    public function about() {
        $name = "Про нас";
        $description = "Тут у майбутньому я напишу опис про себе";

        return view('about', compact('name', 'description'));
    }

}
