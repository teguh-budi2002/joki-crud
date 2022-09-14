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
        <form method="post" action="{{ URL('data/worker') }}">
            @csrf
            <div class="mb-6">
                <label for="nama_perusahaan" class="block mb-2 text-sm font-medium text-gray-900">Nama Perusahaan</label>
                <input type="text" name="nama" id="nama_perusahaan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
            </div>
            <div class="mb-6">
                <label for="tgl_mulai1" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Mulai</label>
                <input type="text" name="tgl_mulai" id="tgl_mulai1"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>
            <div class="mb-6">
                <label for="tanggal_akhir1" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Akhir</label>
                <input type="text" name="tgl_akhir" id="tanggal_akhir1"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>
            <div class="mb-6">
                <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>
            <div class="mb-6">
                <label for="gaji" class="block mb-2 text-sm font-medium text-gray-900">Gaji</label>
                <input type="text" name="gaji" id="gaji"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>
            <div class="mb-6">
                <label for="uraian" class="block mb-2 text-sm font-medium text-gray-900">Uraian</label>
                <input type="text" name="uraian" id="uraian"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>
            <div class="mb-6">
                <label for="answer" class="block mb-2 text-sm font-medium text-gray-900">Aspek/Situasi/Kondisi apa saja yang membuat anda dapat optimal dalam bekerja.Jelaskan!</label>
                <input type="text" name="answer" id="answer"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                    >
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>
        </form>
    </div>
</div>
@endsection
