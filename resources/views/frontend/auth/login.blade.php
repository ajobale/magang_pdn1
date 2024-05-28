@extends('frontend.auth.template')

@section('title')
Login
@endsection

@section('content')


@if(session('pesan'))
<span class="w-full text-red-500">{{ session('pesan') }}</span>
@endsession

    <div class="flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <div class="bg-white px-6 pb-8 pt-10 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
          <div class="mx-auto max-w-md">

            <h2 class="text-center text-lg font-bold">LOGIN</h2>
          
            <form action="{{ route('login') }}" method="post">
              @csrf
              <div class="justify-end py-2">
                <label for="" class="mx-3">Email :</label>
                <input type="email" class="border border-black bg-gray-200" name="email"/>
              </div>
              <div class="">
                <label for="">Password : </label>
                <input type="password" class="border border-black bg-gray-200" name="password"/>
              </div>
           
      
           
              <button type="submit" class="rounded-md bg-green-800 px-4 py-1 text-white hover:bg-blue-600 focus:bg-blue-600 focus:outline-none">Login</button>
              <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
            </div>
            <span class="text-sm">Not have an acccount yet? <a href="{{ "/register" }}" class="font-blue-500">Click this</a></span>
          </form>
        </div>
      </div>
      



  @endsection