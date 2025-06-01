<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Videos;
use App\Livewire\Crew;
use App\Livewire\Contact;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/videos', Videos::class)->name('videos');
Route::get('/crew', Crew::class)->name('crew');
Route::get('/contact', Contact::class)->name('contact');
