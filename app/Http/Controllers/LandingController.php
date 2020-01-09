<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function __invoke()
    {
        return view('landing') ;
    }

    public function daftarHarga()
    {
        return view('pages.daftar-harga') ;
    }

    public function promo()
    {
        return view('pages.promo') ;
    }

    public function testimoni() 
    {
        return view('pages.testimoni') ;
    }
}
