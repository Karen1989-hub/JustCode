<?php

namespace App\Http\Controllers\services\serm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YandexMapsController extends Controller
{
    public function index(){
        return view('services.serm.yandex-maps');
    }
}
