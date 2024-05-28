@extends('frontend.auth.template')

@section('title')
register
@endsection


@section('content')



    <div class="flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <div class="bg-white px-6 pb-8 pt-10 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
          <div class="mx-auto max-w-md">
            <h2 class="text-center text-lg font-bold">LOGIN</h2>
      
            <form action="{{ route('/register.post') }}" method="post">
              @csrf
              <div class="justify-end py-2">
                <label for="" class="mx-3 text-red-500">Nama : <span>{{ $errors->first('name') }}</span></label>
                <input type="text" class="border border-black bg-gray-200" name="name" value="{{ old('name') }}" 
               
                
                />
              </div>
              <div class="justify-end py-2">
                <label for="" class="mx-3">Email :  <span>{{ $errors->first('email') }}</span></label>
                <input type="email" class="border border-black bg-gray-200" name="email"  value="{{ old('email') }}"/>
              </div>
              <div class="">
                <label for="">Password : <span>{{ $errors->first('password') }}</span></label>
                <input type="password" class="border border-black bg-gray-200" name="password"  value="{{ old('password') }}"/>
              </div>
               <div class="mt-3 flex items-center justify-between">
              <button type="submit" class="rounded-md bg-green-800 px-4 py-1 text-white hover:bg-blue-600 focus:bg-blue-600 focus:outline-none">Register</button>
              <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
            </div>
            </form>
      
           
            <span class="font-sm">already have an account? <a href="{{ "/login" }}"> Please login</a></span>
          </div>
        </div>
      </div>
      


@endsection
