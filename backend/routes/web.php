<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.main');
});


Route::view('contact-us', 'frontend.contactus.index');
Route::view('faqs', 'frontend.faqs.index');
Route::view('ourdrivers', 'frontend.company.ourdriver');
Route::view('about-us', 'frontend.company.aboutus');
Route::view('how-to-start', 'frontend.company.howtostart');
Route::view('shipper', 'frontend.company.shipper');
