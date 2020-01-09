<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function __invoke()
    {
        return view('page.promo') ;
    }
}
