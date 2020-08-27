<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/fish', 'FishController');

Route::apiResource('/category', 'CategoryController');
