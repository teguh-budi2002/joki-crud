@extends('app')
@section('content')
<div class="flex flex-col items-center justify-center min-h-screen">
    @if ($mes = Session::get('errors'))
    <div class="bg-pink-500 p-2 w-96 text-white rounded-lg">
        <p>{{ $mes->first() }}</p>
    </div>
    @endif
    <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        <h3 class="text-2xl font-bold text-center">Login</h3>
        <form action="{{ route('send.login') }}" method="post">
            @csrf
            <div class="mt-4">
                <div>
                    <label class="block" for="email">Email<label>
                            <input type="text" name="email" placeholder="Email"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                            <input type="password" name="password" placeholder="Password"
                                class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="flex items-baseline justify-center">
                    <button class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection