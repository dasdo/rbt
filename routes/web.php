<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

// Language switching route
Route::get('/locale/{locale}', function (string $locale) {
    if (in_array($locale, ['es', 'en'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    
    // Redirect back to the previous URL or admin panel
    $previousUrl = url()->previous();
    if (empty($previousUrl) || $previousUrl === url()->current()) {
        $previousUrl = url('/admin');
    }
    
    return redirect($previousUrl);
})->name('locale.switch');
