<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomSoftwareController extends Controller
{
    public function index(){
        return view('services.custom-software');
    }
}
