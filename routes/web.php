<?php

use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/translate', function() {
    $tr = new GoogleTranslate('en');
    $tr->setSource('en'); 
    return $tr->setTarget('ka')->translate('hello world');
});