<?php

use App\Models\site;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $sites = site::all()->pluck('content', 'title');

    return view('welcome', [
        'site' => $sites,
    ]);
});
