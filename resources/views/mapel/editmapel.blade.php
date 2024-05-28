@extends('home.template')

@section('title')
    Edit Data
@endsection


@section('content')

<form action="{{ route('updatemapel', $mapel->id)}}" enctype="multipart/form-data" method="post">
    
@csrf


<div class="flex flex-col gap-2">
    <div>
        <label for="">Nama Mapel</label>
        <input type="text" name="nama_mapel" class="p-2 border rounded-md" value="{{ $mapel->nama_mapel }}">
        <span>{{ $errors->first('nama_dosen') }}</span>
    </div>
    <div>
        <label for="">Nama Dosen</label>
        <input type="text" name="nama_dosen" class="p-2 border rounded-md" value="{{ $mapel->nama_dosen}}">
        <span>{{ $errors->first('nama_dosen') }}</span>
    </div>
    <div>
        <label for="">Kuota</label>
        <input type="text" name="kuota" class="p-2 border rounded-md" value="{{ $mapel->kuota  }}">
        <span>{{ $errors->first('telpon') }}</span>
    </div>

    <div>
        <label for="">Kelas</label>
        <input type="text" name="kelas" class="p-2 border rounded-md" value="{{ $mapel->kelas  }}">
        <span>{{ $errors->first('telpon') }}</span>
    </div>
    {{-- <div>
        <label for="">Foto</label>
        <input type="file" name="foto" class="p-2 border rounded-md">
        <span>{{ $errors->first('foto') }}</span>
    </div> --}}
    <div class="flex justify-end">

        <button type="submit" class="bg-blue-500 w-1/2 p-2 text-white">
Simpan
        </button>
    </div>

</div>

</form>

@endsection
