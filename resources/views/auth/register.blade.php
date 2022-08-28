@extends('app')
@section('content')
<div class="min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-lg text-black w-full">
            @if ($errors->any())
            <div class="bg-pink-500 text-white rounded-lg p-2">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
            <h1 class="mb-8 text-3xl text-center">Sign up</h1>
            <form action="{{ route('send.regis') }}" method="post">
                @csrf
                <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="username"
                    placeholder="Full Name">

                <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                    placeholder="Email">

                <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                    placeholder="Password">
                <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="password_confirmation" placeholder="Confirm Password">
                <button type="submit"
                    class="w-full text-center text-white py-3 rounded-lg bg-green-500 hover:bg-green-600 focus:outline-none my-1">Create
                    Account</button>

                <div class="text-gray-500 text-center mt-5">
                    Sudah punya akun?
                    <a class="text-blue-500" href="{{ url('auth/login') }}">
                        Log in
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
