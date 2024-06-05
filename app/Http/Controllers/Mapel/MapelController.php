<?php

namespace App\Http\Controllers\Mapel;


use App\Models\Mapel;
use App\Http\Controllers\Controller;
use App\Http\Requests\MapelRequest;

class MapelController extends Controller
{
    public function index() {
        $data['mapel'] = Mapel::get();
        return view ('mapel/mapel');
    }

    public function tambah(){
        return view('mapel/tambahmapel');
    }


    public function save(MapelRequest $r){

        // if($r->validated()) {
        //     $foto = $r->foto->getClientOriginalName();
        //     $r->foto->move('foto/', $foto);

            Mapel::create([
                'nama_mapel' => $r->nama_mapel,
                'nama_dosen' => $r->nama_dosen,
                'kuota' => $r->kuota,
                'kelas' => $r->kelas
            ]);

            return redirect('mapel')->with('pesan', 'input data berhasil');
        
}

    public function editmapel($id) {
    $data['mapel'] = Mapel::where('id', $id)->findOrFail();

    return view('mapel/editmapel', $data);

}


    public function updatemapel(MapelRequest $r, $id){
    if($r->validated()) {
        // if($r->foto){
        //     $cek = Mapel::where('id', $id) ->first();
        //     if(File::exists(public_path('foto/'. $cek->foto))) {
        //         File::delete(public_path('foto/'.$cek->foto));
        //     }

        //     $foto = $r->foto->getClientOriginalName();
        //     $r->foto->move('foto/', $foto);

        //     $data['foto'] = $foto;
        // }
        
        $data['nama_mapel'] = $r->nama_mapel;
        $data['nama_dosen'] = $r->nama_dosen;
        $data['kuota'] = $r->kuota;
        $data['kelas'] = $r->kelas;

        Mapel::where('id', $id)->update($data);

        return redirect('mapel');
    }

    }

    public function hapus($id){
        mapel::where('id', $id)->delete();

        return back();
    }

}

