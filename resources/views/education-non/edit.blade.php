@extends('app')
@section('content')
<div class="w-full flex justify-center mt-28">
    <div class="w-3/5 bg-white shadow-md shadow-gray-400 p-3 rounded-md">
        <form method="post" action="{{ URL('/education/non/formal/' . $edu->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kursus</label>
                <input type="text" name="kursus" id="email" value="{{ old('kursus', $edu->kursus) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Tempat Kursus</label>
                <input type="text" name="tempat" id="password" value="{{ old('tempat', $edu->tempat) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>
            <div class="mb-6">
                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun Kursus</label>
                <input type="text" name="tahun" id="tahun" value="{{ old('tahun', $edu->tahun) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>
            <div class="mb-6">
                <label for="ket" class="block mb-2 text-sm font-medium text-gray-900">Ket.</label>
                <input type="text" name="ket" id="ket" value="{{ old('ket', $edu->ket) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>
        </form>
    </div>
</div>
@endsection
