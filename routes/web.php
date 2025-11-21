<?php

use App\Livewire\Page\About;
use App\Livewire\Page\Contact;
use App\Livewire\Page\Feature;
use App\Livewire\Page\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/feature', Feature::class)->name('features');
