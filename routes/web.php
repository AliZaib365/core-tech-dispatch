<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.main');
});

// Informational routes
Route::group(['prefix' => 'info'], function () {
    Route::view('contact-us', 'frontend.contactus.index');
    Route::view('faqs', 'frontend.faqs.index');
    Route::view('ourdrivers', 'frontend.company.ourdriver');
    Route::view('about-us', 'frontend.company.aboutus');
    Route::view('how-to-start', 'frontend.company.howtostart');
    Route::view('shipper', 'frontend.company.shipper');
    Route::view('all-trucks', 'frontend.trucks.index');
    Route::view('all-services', 'frontend.services.index');
});


// Truck detail routes
Route::group(['prefix' => 'truck-detail'], function () {
    Route::view('hot-spot', 'frontend.trucks.hotspot_truck');
    Route::view('power-truck', 'frontend.trucks.power-truck');
    Route::view('flatbed-truck', 'frontend.trucks.flatbed-truck');
    Route::view('reefer-truck', 'frontend.trucks.reefer-truck');
    Route::view('stepdeck-truck', 'frontend.trucks.stepdeck-truck');
    Route::view('dryvan-truck', 'frontend.trucks.dryvan-truck');
    Route::view('conestoga-truck', 'frontend.trucks.conestoga-truck');
    Route::view('box-truck', 'frontend.trucks.box-truck');
});

// Service detail routes
Route::group(['prefix' => 'service-detail'], function () {
    Route::view('dispatching-services', 'frontend.services.dispatching');
    Route::view('neogtiation-services', 'frontend.services.negotiation');
    Route::view('factoring-services', 'frontend.services.factoring');
    Route::view('document-dispatch-services', 'frontend.services.document_dispatch');
    Route::view('trucking-document-services', 'frontend.services.trucking_document');
    Route::view('trucking-accounting-services', 'frontend.services.trucking_accounting');
    Route::view('ifta-services', 'frontend.services.ifta');
    Route::view('dot-services', 'frontend.services.dot');
    Route::view('company-formation-services', 'frontend.services.company_formation');
    Route::view('document-management-services', 'frontend.services.document_management');
});
