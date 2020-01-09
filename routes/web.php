<?php

Route::get('/', 'LandingController');

Route::geT('/daftar-harga', 'LandingController@daftarHarga') ;

Route::get('/testimoni', 'LandingController@testimoni') ;

Route::get('/promo', 'LandingController@promo') ;