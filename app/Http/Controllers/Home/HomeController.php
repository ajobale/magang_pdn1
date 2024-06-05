<?php

namespace App\Http\Controllers\Home;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\File;


class HomeController extends Controller
{
    public function index(){
        $data['user'] = Pengguna::get();
        return view ('home/home', $data);

    }
}
