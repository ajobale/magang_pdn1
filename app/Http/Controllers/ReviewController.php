<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Pengguna;
use App\Models\Reviewer;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewerRequest;

class ReviewController extends Controller
{
    public function index() {

        $data['reviewer'] = Reviewer::get();
    
        return view('review/review', $data);
    }

    public function addreviewer(){
        return view('review/tambah');
    }

    public function savereview(ReviewerRequest $r){

        if($r->validated()) {
            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('foto/', $foto);

            Reviewer::create([
                'nama' => $r->nama,
                'email' => $r->email,
                'judul' => $r->judul,
                'review' =>$r->review,
                'foto' => $foto,
            ]);

            return redirect('review')->with('pesan', 'input data berhasil');
        }

       
    }

    public function editreview($id) {
        $data['reviewers'] = Review::where('id', $id)->first();

        return view('reviewer/edit', $data);
    }

}
