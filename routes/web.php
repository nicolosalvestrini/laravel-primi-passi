<?php
use Illuminate\Support\Facades\Route;

$navlinks = [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'About', 'url' => '/about'],
    ['name' => 'Contact', 'url' => '/contact'],
];

Route::get('/', function () use ($navlinks) {
    return view('home', compact('navlinks'));
});

Route::get('/about', function () use ($navlinks) {
    return view('about', compact('navlinks'));
});

Route::get('/contact', function () use ($navlinks) {
    return view('contact', compact('navlinks'));
});
