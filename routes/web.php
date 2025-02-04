<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;
use Illuminate\Support\Facades\Route;

Route::get('/message',function(){
    return response()->json(['message' => 'Hello World!']);
});
