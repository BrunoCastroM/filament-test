<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/plans', function () {
    return view('public.plans');
})->name('plans');

Route::get('/checkout', function (Request $request) {
    $plan = $request->query('plan', 'default_plan');

    if (!Auth::check()) {
        return redirect()->route('filament.app.auth.login')
            ->with('url.intended', url()->current() . '?' . http_build_query($request->query()));
    }

    return view('checkout', compact('plan'));
})->name('checkout');

Route::get('/login', function () {
    return redirect()->route('filament.app.auth.login');
})->name('login');

Route::get('/register', function () {
    return redirect()->route('filament.app.auth.register');
})->name('register');
