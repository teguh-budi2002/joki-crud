@extends('app')
@section('content')
<div class="w-full h-full flex flex-col justify-center items-center">
    <div class="text-main text-4xl text-gray-500">
        <span>ISIKAN DATA DIRI ANDA MELALUI FORM DIBAWAH INI</span>
    </div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif
    <div class="w-2/5 h-auto p-4 rounded-lg mt-5 mb-10 bg-white shadow-xl shadow-gray-500">
        <a href="{{ URL('/dashboard') }}" class="text-sm text-red-500 hover:text-red-700 transition duration-300">Kembali?</a>
        <div class="mb-5 text-center">
            <span class="text-2xl font-semibold text-gray-500">FORMULIR PT APA SAJA DAH</span>
        </div>
        <form action="{{ route('dashboard.store') }}" method="post">
            @csrf
            <div class="form space-y-5">
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="nama">NAMA LENGKAP</label>
                    <input type="text" name="nama" id="nama" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="tempat">TEMPAT LAHIR</label>
                    <input type="text" name="tempat_lahir" id="tempat" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="tanggal">TANGGAL LAHIR</label>
                    <input type="text" name="tanggal_lahir" id="tanggal" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="usia">USIA</label>
                    <input type="text" name="usia" id="usia" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="jenis">JENIS KELAMIN</label>
                    <input type="text" name="jenis_kelamin" id="jenis" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="bangsa">SUKU BANGSA</label>
                    <input type="text" name="suku" id="bangsa" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" name="alamat" id="alamat" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="Agama">AGAMA</label>
                    <input type="text" name="agama" id="Agama" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="status">STATUS PERNIKAHAN</label>
                    <input type="text" name="status" id="status" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="phone">NO. TELP</label>
                    <input type="text" name="phone" id="phone" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="email">EMAIL</label>
                    <input type="text" name="email" id="email" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="hobby">HOBI</label>
                    <input type="text" name="hobi" id="hobby" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-violet-500 hover:bg-violet-800 text-white py-2.5 px-8 rounded">SIMPAN DATA</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection