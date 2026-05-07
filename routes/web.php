<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\GeneralView;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(GeneralView::class)->group(function (){
   Route::get('/', 'Home'); 
});
