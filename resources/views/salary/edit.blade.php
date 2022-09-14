@extends('app')
@section('content')
<div class="w-full flex justify-center mt-28">
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif
    <div class="w-3/5 bg-white shadow-md shadow-gray-400 p-3 rounded-md">
        <form method="post" action="{{ URL('salary/' . $sl->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="answ-pw1" class="block mb-2 text-sm font-medium text-gray-900">Berapa gaji yang diharapkan?</label>
                <input type="text" name="salary" id="answ-pw1" value="{{ old('salary', $sl->salary) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>
        </form>
    </div>
</div>
@endsection
