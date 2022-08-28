@extends('app')
@section('content')
<div class="w-full h-screen flex flex-col justify-center items-center">
    <div class="text-home text-4xl">
        <span>Hallo selamat datang pada website kami!</span>
    </div>
    @if ($message = Session::get('sukses'))
        <div class="bg-green-500 w-3/4 p-2 rounded text-center text-white mt-2">
            <span>{{ $message }}</span>
        </div>
    @endif
    <div class="bg-blue-200 mt-2 w-3/4 p-2 rounded-t-md text-center">
        <span class="text-xl">Login Dan Register Dengan Laravel</span>
    </div>
    <div class="bg-gray-50 w-3/4 p-2 h-auto rounded-b-md">
        <div class="text-main text-center">
            <span class="text-lg text-gray-600">Silahkan membuat akun dahulu!</span>
        </div>
        <div class="mt-3 mb-4 flex justify-center items-center space-x-3">
            <div class="reg-button">
                <a href="{{ URL('/auth/register') }}" class="py-2.5 px-8 rounded-full bg-blue-500 hover:bg-blue-400 text-white transition duration-300">REGISTER</a>
            </div>
            <div class="log-button">
                <a href="{{ URL('/auth/login') }}" class="py-2.5 px-8 rounded-full bg-green-500 hover:bg-green-400 text-white transition duration-300">LOGIN</a>
            </div>
        </div>
    </div>
</div>
@endsection
