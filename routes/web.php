<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function (){
    return view('about', [
        "nama" => "khana",
        "email" => "putukhanabijingambang@gmail.com"
    ]);
});
Route::get('/blog', function(){
    return view('blog');
});
Route::get('/contact', function(){
    return view('contact');
});