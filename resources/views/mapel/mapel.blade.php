@extends('home.template')

@section('title')
Halaman Mapel GUYS
@endsection

@section('content')
    <div class="flex justify-between ">
        <div class="text-xl font-bold border rounded-md" >Data User</div>
        <div>
            <a href="{{ route('/tambahmapel') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 rounded-md"> Tambah Data</a>
        </div>
    </div>

    <table class="table w-full mt-5">

        <thead>
            <tr class="border p-3 bg-teal-200">
                <th>No</th>
                <th>Nama Mapel</th>
                <th>Nama Dosen</th>
                <th>Kuota Kelas</th>
                <th>Kelas</th>
                <th>Action</th>
               
            </tr>

        </thead>

        <tbody class="text-center  ">

           
                @foreach ($mapel as $i => $a)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $a->nama_mapel }}</td>
                    <td>{{ $a->nama_dosen }}</td>
                
                    
                    <td>{{ $a->kuota }}</td>
                    <td>{{ $a->kelas }}</td>
                    
                    {{-- <td><img src="{{ asset('foto/'. $a->foto) }}" alt="" class="w-16"></td> --}}
                        <td class="border-p3">
                            <div class="flex gap-3 justify-center">
                                <a href="{{ route('editmapel', $a->id) }}" class="bg-blue-500 flex items-center justify-center hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                                <a href="{{ route('hapusmapel', $a->id) }}" class="bg-red-500 hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                            </div>
                        </td>
                </tr>
                    
                @endforeach

        </tbody>

    </table>

    {{-- @dd(auth()->user())  --}}
@endsection