@extends('layout')
@section('content')

<div id="layoutAuthentication" >
    <div id="layoutAuthentication_content">
        <main class="bg-pink-300 h-screen w-full">
            <div class="container mx-auto">
                <div class="flex justify-center">
                    <div class="w-full md:w-1/2 lg:w-1/3">
                        <div class="bg-white shadow-lg rounded-lg mt-24">
                               @if (session('success'))
            <div class="m-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
                            {{-- Error Alert --}}
                            @if(session('error'))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                {{session('error')}}
                                <button type="button" class="absolute top-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1 1 0 0 1-1.415 1.414l-2.829-2.828-2.828 2.828a1 1 0 1 1-1.415-1.414l2.828-2.828-2.828-2.829a1 1 0 0 1 1.415-1.414l2.828 2.828 2.829-2.828a1 1 0 0 1 1.415 1.414l-2.829 2.828 2.829 2.829z"></path></svg>
                                </button>
                            </div>
                            @endif
                            <div class="px-8 py-8">
                           
                               
                                <h3 class="text-center text-3xl font-semibold mb-4">Login</h3>
                            </div>
                            <div class="px-8 py-6">
                                <form action="{{url('proses_login')}}" method="POST" id="logForm">
                                    {{ csrf_field() }}
                                    <div class="mb-4">
                                        @error('login_gagal')
                                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
                                                <span class="font-semibold">Warning!</span> {{ $message }}
                                                <button type="button" class="absolute top-0 right-0 px-4 py-3">
                                                    <svg class="fill-current h-6 w-6 text-yellow-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1 1 0 0 1-1.415 1.414l-2.829-2.828-2.828 2.828a1 1 0 1 1-1.415-1.414l2.828-2.828-2.828-2.829a1 1 0 0 1 1.415-1.414l2.828 2.828 2.829-2.828a1 1 0 0 1 1.415 1.414l-2.829 2.828 2.829 2.829z"></path></svg>
                                                </button>
                                            </div>
                                        @enderror
                                        <label class="block text-sm font-semibold mb-1" for="inputEmailAddress">Username/Email</label>
                                        <input
                                            class="form-input w-full py-2 px-4 rounded border border-gray-300 focus:outline-none focus:border-indigo-500"
                                            id="inputEmailAddress"
                                            name="email"
                                            type="text"
                                            placeholder="Masukkan Username"/>
                                        @if($errors->has('email'))
                                        <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm font-semibold mb-1" for="inputPassword">Password</label>
                                        <input
                                            class="form-input w-full py-2 px-4 rounded border border-gray-300 focus:outline-none focus:border-indigo-500"
                                            id="inputPassword"
                                            type="password"
                                            name="password"
                                            placeholder="Masukkan Password"/>
                                        @if($errors->has('password'))
                                        <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                
                                    <div class="mb-4">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="px-8 py-4 bg-gray-100 border-t border-gray-200">
                                <div class="text-center hover:text-pink-600 hover:transition-color duration-200  text-sm">
                                  <a href="{{route('register')}}">Belum Punya Akun? Daftar!</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
@endsection