@extends('home.template')

@section('title')
    Tambah Data Service
@endsection


@section('content')

<form action="{{ route('saveservice')}}" enctype="multipart/form-data" method="post">
    
@csrf


<h2 class="m-3">Tambah Data Service</h2>
<br>
<div class="flex flex-col gap-2">
    <div>
        <label for="">Nama</label>
        <input type="text" name="nama_service" class="p-2 border rounded-md" value="{{ old('nama') }}">
        <span>{{ $errors->first('nama_service') }}</span>
    </div>
    <div>
        <label for="">Jenis</label>
        <input type="text" name="jenis_service" class="p-2 border rounded-md" value="{{ old('email') }}">
        <span>{{ $errors->first('jenis_service') }}</span>
    </div>
    <div>
        <label for="">Pelayan</label>
        <input type="text" name="pelayan_service" class="p-2 border rounded-md" value="{{ old('pelayan_service') }}">
        <span>{{ $errors->first('pelayan_service') }}</span>
    </div>
    <div>
        <label for="">Telepon</label>
        <input type="text" name="contact_service" class="p-2 border rounded-md" value="{{ old('contact_service') }}">
        <span>{{ $errors->first('contact_service') }}</span>
    </div>
    <div>
        <label for="">Foto</label>
        <input type="file" name="foto_service" class="p-2 border rounded-md">
        <span>{{ $errors->first('foto_service') }}</span>
    </div>
    <div class="flex justify-end">

        <button type="submit" class="bg-blue-500 w-1/2 p-2 text-white">
Simpan
        </button>
    </div>

</div>

</form>

@endsection
