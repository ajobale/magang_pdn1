<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;
class KotaController extends Controller
{
    public function index(){
        $data['kota'] = Kota::leftJoin('provinsi', 'provinsi.id', 'kota.id_provinsi')->select('kota.id', 'provinsi.nama_provinsi', 'kota.nama_kota')->get();
         return view('kota/index', $data);

    }
    

}
