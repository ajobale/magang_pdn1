@extends('home.template')

@section('title')
    Tambah Data
@endsection


@section('content')

<form action="{{ route('savereview')}}" enctype="multipart/form-data" method="post">
    
@csrf


<div class="flex flex-col gap-2">
    <div>
        <label for="">Nama</label>
        <input type="text" name="nama" class="p-2 border rounded-md" value="{{ old('nama') }}">
        <span>{{ $errors->first('nama') }}</span>
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="email" class="p-2 border rounded-md" value="{{ old('email') }}">
        <span>{{ $errors->first('email') }}</span>
    </div>
    <div>
        <label for="">Judul</label>
        <input type="text" name="judul" class="p-2 border rounded-md" value="{{ old('judul') }}">
        <span>{{ $errors->first('judul') }}</span>
    </div>
    <div>
        <label for="">Review</label>
        <textarea name="review" id="" cols="30" rows="10" class="p-2 border rounded-md" value="{{ old('review') }}">


        </textarea>
        
        <span>{{ $errors->first('review') }}</span>
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
