<?php

namespace App\Http\Controllers\services\sozdanieSaitov;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('services.sozdanie-saitov.landing-page');
    }
}
