<?php
use Illuminate\Support\Facades\Route;

$navlinks = [
    ['name' => 'Home', 'route' => 'home'],
    ['name' => 'About', 'route' => 'about'],
    ['name' => 'Contact', 'route' => 'contact'],
];

Route::get('/', function () use ($navlinks) {
    return view('home', compact('navlinks'));
})->name('home');

Route::get('/about', function () use ($navlinks) {
    return view('about', compact('navlinks'));
})->name('about');

Route::get('/contact', function () use ($navlinks) {
    return view('contact', compact('navlinks'));
})->name('contact');
