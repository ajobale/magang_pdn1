@extends('destinasi.template')

@section('title')
Halaman Home Destinasi
@endsection

@section('content')

<div class="max-w-screen-xl flex flex-wrap items-center  mx-auto p-4 justify-center mt-14">
        
<h1>Hello Nerd {{ auth()->user()->name }}</h1>


</div>


@endsection