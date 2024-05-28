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
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Photo</th>
                <th>Action</th>
               
            </tr>

        </thead>

        <tbody class="text-center  ">
            @foreach ($user as $i => $a)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->email }}</td>
              
                <td>{{ $a->telpon }}</td>
                <td><img src="{{ asset('foto/'. $a->foto) }}" alt="" class="w-16"></td>
                    <td class="border-p3">
                        <div class="flex gap-3 justify-center">
                            <a href="{{ route('edit', $a->id) }}" class="bg-blue-500 flex items-center justify-center hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                            <a href="{{ route('hapus', $a->id) }}" class="bg-red-500 hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                        </div>
                    </td>
            </tr>
                
            @endforeach

        </tbody>

    </table>

    {{-- @dd(auth()->user())  --}}
@endsection