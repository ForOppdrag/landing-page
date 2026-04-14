<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('home');
Route::redirect('/accueil', '/', 301);

Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/mentions-legales', 'pages.mentions-legales')->name('mentions-legales');
Route::view('/confidentialite', 'pages.confidentialite')->name('confidentialite');
Route::view('/a-propos', 'pages.a-propos')->name('a-propos');
Route::view('/blog', 'pages.blog')->name('blog');

Route::post('/contact/send', [ContactController::class, 'send'])
    ->middleware('throttle:5,1')
    ->name('contact.send');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])
    ->middleware('throttle:8,1')
    ->name('newsletter.subscribe');
