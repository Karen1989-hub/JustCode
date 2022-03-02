<?php

namespace App\Http\Controllers\services\serm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KompleksnoeUpravlenieReputatsieyController extends Controller
{
    public function index(){
        return view('services.serm.kompleksnoe-upravlenie-reputatsiey');
    }
}
