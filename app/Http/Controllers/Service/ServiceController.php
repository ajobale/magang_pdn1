<?php


namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    
    public function index() {
        $data['service'] = Service::get();
        return view('service/service', $data);
    }

    public function tambahservice() {
        return view('service/tambahservice');
    }

    public function saveservice(ServiceRequest $rs) {
        if($rs->validated()) {
            $fotors = $rs->foto_service->hashName();    
            $rs->foto_service->move('foto/', $fotors);

            Service::create([
                'nama_service' => $rs->nama_service,
                'jenis_service' => $rs->jenis_service,
                'pelayan_service' => $rs->pelayan_service,
                'contact_service' => $rs->contact_service,
                'foto_service' => $fotors,
            ]);

            return redirect('service')->with('pesanrs', 'input data service berhasil');
            

        }


        }
    public function edit($id) {
            $data['service'] = Service::where('id', $id)->first();
     
            return view('service/editservice', $data);
    }

    public function update(UpdateRequest $r, $id) {
        if($r->validated()) {
            if($r->foto){
                $cek = Service::where('id', $id) ->first();
                if(File::exists(public_path('foto/'. $cek->foto))) {
                    File::delete(public_path('foto/'. $cek->foto));
                }

                $foto = $r->foto->getClientOriginalName();
                $r->foto->move('foto/', $foto);

                $data['foto'] = $foto;

            }

            $data['nama_service'] = $r->namars;
            $data['jenis_service'] = $r->jenisrs;
            $data['pelayan_service'] = $r->service;
            
            Service::where('id', $id)->update($data);

            return redirect('service');

        }
    }

}
