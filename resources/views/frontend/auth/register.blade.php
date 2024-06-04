@extends('frontend.auth.template')

@section('title')
Halaman Registrasi
@endsection

@section('content')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-15  w-auto" src="img/mountain128.png" alt="Your Company">
      <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Let's be a New True Traveller</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-4" action="{{ route('/register.post') }}" method="POST">
        @csrf
        <div>
          {{-- <label for="" class="mx-3 text-red-500">Nama : <span>{{ $errors->first('name') }}</span></label>
          <input type="text" class="border border-black bg-gray-200" name="name" value="{{ old('name') }}" /> --}}
          
          
          <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama<span>{{ $errors->first('name') }}</span></label>

            <div class="mt-2">
              <input id="name" name="name" type="text" autocomplete="name" required  value="{{ old('name') }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div>
            {{-- <div class="justify-end py-2">
              <label for="" class="mx-3">Email :  <span>{{ $errors->first('email') }}</span></label>
              <input type="email" class="border border-black bg-gray-200" name="email"  value="{{ old('email') }}"/>
            </div> --}}


            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('email') }}" />
            </div>
          </div>
          {{-- <div>
            <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
            <div class="mt-2">
              <input id="alamat" name="alamat" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div> --}}
          {{-- <div>
            <label for="no_hp" class="block text-sm font-medium leading-6 text-gray-900">No Handphone</label>
            <div class="mt-2">
              <input id="no_hp" name="no_hp" type="text" autocomplete="no_hp" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div> --}}
        
  
        <div>
          {{-- <div class="">
            <label for="">Password : <span>{{ $errors->first('password') }}</span></label>
            <input type="password" class="border border-black bg-gray-200" name="password"  value="{{ old('password') }}"/>
          </div> --}}

            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
              <input id="password" name="password" type="password" autocomplete="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
       Already Have Account?
        <a href="{{ "/login" }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Please Login</a>
      </p>
    </div>
  </div>
  
  @endsection