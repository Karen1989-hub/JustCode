<?php

namespace App\Http\Controllers\services\SozdanieSaitov;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index(){
        return view('services.sozdanie-saitov.design');
    }
}
