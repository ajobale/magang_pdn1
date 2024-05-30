@extends('home.template')

@section('title')
    Edit Data
@endsection


@section('content')

<form action="{{ route('update', $pengguna->id)}}" enctype="multipart/form-data" method="post">
    
@csrf


<div class="flex flex-col gap-2">
    <div>
        <label for="">Nama</label>
        <input type="text" name="nama" class="p-2 border rounded-md" value="{{ $pengguna->nama }}">
        <span>{{ $errors->first('nama') }}</span>
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="email" class="p-2 border rounded-md" value="{{ $pengguna->email  }}">
        <span>{{ $errors->first('email') }}</span>
    </div>
    <div>
        <label for="">Telepon</label>
        <input type="text" name="telpon" class="p-2 border rounded-md" value="{{ $pengguna->telpon  }}">
        <span>{{ $errors->first('telpon') }}</span>
    </div>
    <div>
        <label for="">Foto</label>
        <input type="file" name="foto" class="p-2 border rounded-md">
        <span>{{ $errors->first('foto') }}</span>
    </div>
    <div class="flex justify-end">

        <button type="submit" class="bg-blue-500 w-1/2 p-2 text-white">
Simpan
        </button>
    </div>

</div>

</form>

@endsection
