<?php

namespace App\Http\Controllers\services\mobilnyePrilozheniya;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IosController extends Controller
{
    public function index(){
        return view('services.mobilnye-prilozheniya.iosPage');
    }
}
