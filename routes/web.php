<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $navlinks = [
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'About', 'url' => '/about'],
        ['name' => 'Contact', 'url' => '/contact'],
    ];
    return view('home', compact('navlinks'));
});
