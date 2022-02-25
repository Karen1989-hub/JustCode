<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobilnyePrilozheniyaController extends Controller
{
    public function index(){
        return view('services.mobilnye-prilozheniya');
    }
}
