@extends('home.template')

@section('title')
Halaman Home
@endsection

@section('content')
    <div class="flex justify-between ">
        <div class="text-xl font-bold border rounded-md" >Data User</div>
        <div>
            <a href="{{ route('/tambah') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 rounded-md"> Tambah Data</a>
        </div>
    </div>

    <table class="table w-full mt-5">

        <thead>
            <tr class="border p-3 bg-teal-200">
                <th>No</th>
                <th>Nama Provinsi</th>
                <th>id provinsi</th>
                <th>Nama Kota</th>
                <th>Action</th>
               
            </tr>

        </thead>

        <tbody class="text-center  ">
            @foreach ($kota as $i => $a)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $a->nama_provinsi }}</td>
                <td>{{ $a->id_provinsi }}</td>
              
                <td>{{ $a->nama_kota }}</td>
              
            </tr>
                
            @endforeach

        </tbody>

    </table>

    {{-- @dd(auth()->user())  --}}
@endsection