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
        <form method="post" action="{{ URL('minat') }}">
            @csrf
            <div class="mb-6">
                <label for="answ1" class="block mb-2 text-sm font-medium text-gray-900">1.)  Apa yang anda sukai dari pekerjaan anda sekarang/terakhir? (kondisi,tugas-tugas dan sebagainya). Jelaskan</label>
                <input type="text" name="answer1" id="answ1"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
            </div>
            <div class="mb-6">
                <label for="answ2" class="block mb-2 text-sm font-medium text-gray-900">2.)  Apa yang anda tidak sukai dari pekerjaan anda sekarang/terakhir? (kondisi,tugas-tugas,dan sebagainya). Jelaskan</label>
                <input type="text" name="answer2" id="answ2"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>
            <div class="mb-6">
                <label for="answ3" class="block mb-2 text-sm font-medium text-gray-900">3.)  Apa yang anda capai, Jelaskan alasanya.</label>
                <input type="text" name="answer3" id="answ3"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>
            <div class="mb-6">
                <label for="answ4" class="block mb-2 text-sm font-medium text-gray-900">4.)  Menurut anda, apa yang masih perlu dikembangkan lagi untuk mendukung pekerjaan anda?</label>
                <input type="text" name="answer4" id="answ4"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>
        </form>
    </div>
</div>
@endsection
