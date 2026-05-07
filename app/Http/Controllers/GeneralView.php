<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GeneralView extends Controller
{
    public function Home(){
        return Inertia::render('home');
    }
}
