<?php

namespace App\Http\Controllers\services\sozdanieSaitov;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KorporativnyiSiteController extends Controller
{
    public function index(){
        return view('services.sozdanie-saitov.korporativnyi-site');
    }
}
