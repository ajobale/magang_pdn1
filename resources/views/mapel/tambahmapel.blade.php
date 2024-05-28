@extends('home.template')

@section('title')
    Tambah Data
@endsection


@section('content')

<form action="{{ route('savemapel')}}" enctype="multipart/form-data" method="post">
    
@csrf


<div class="flex flex-col gap-2">
    <div>
        <label for="">Nama Mapel</label>
        <input type="text" name="nama_mapel" class="p-2 border rounded-md" value="{{ old('nama_mapel') }}">
        <span>{{ $errors->first('nama_mapel') }}</span>
    </div>
    <div>
        <label for="">Nama Dosen</label>
        <input type="text" name="nama_dosen" class="p-2 border rounded-md" value="{{ old('nama_dosen') }}">
        <span>{{ $errors->first('nama_dosen') }}</span>
    </div>
    <div>
        <label for="">KuotaKelas</label>
        <input type="text" name="kuota" class="p-2 border rounded-md" value="{{ old('telpon') }}">
        <span>{{ $errors->first('telpon') }}</span>
    </div>
    <div>
        <label for="">Kelas</label>
        <input type="text" name="kelas" class="p-2 border rounded-md" value="{{ old('kelas') }}">
        <span>{{ $errors->first('kelas') }}</span>
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
