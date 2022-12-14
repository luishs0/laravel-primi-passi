<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

    return view('Home', $data);
});
