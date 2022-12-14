<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $sayHello = "Hello";
    $frameworks = ["Bootstrap", "Vue.js", "laravel"];

    $data = [
        "sayHello" => "Hello",
        "frameWorks" => [
            "Bootstrap",
            "Vue.js",
            "Laravel"
        ]
    ];

    return view('home', $data);
})->name("home");



Route::get('/store', function () {
    $store = "Store";

    return view('store', compact("store"));
})->name("store");
