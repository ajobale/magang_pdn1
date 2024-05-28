<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LoginContoller extends Controller
{
    public function index() {
        $data['cache'] = Cache::get('remember');
        return view('frontend.auth.login');
    }


    
}
