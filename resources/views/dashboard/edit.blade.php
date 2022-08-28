@extends('app')
@section('content')
<div class="w-full h-full flex flex-col justify-center items-center">
    <div class="text-main text-4xl text-gray-500">
        <span>EDIT DATA DIRI ANDA MELALUI FORM DIBAWAH INI</span>
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
        @foreach ($posts as $post)
        <form action="{{ url('dashboard/' . $post->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form space-y-5">
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="nama">NAMA LENGKAP</label>
                    <input type="text" name="nama" value="{{ old('nama', $post->nama) }}" id="nama" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="tempat">TEMPAT LAHIR</label>
                    <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $post->tempat_lahir) }}" id="tempat" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="tanggal">TANGGAL LAHIR</label>
                    <input type="text" name="tanggal_lahir" value="{{ old('tanggal_lahir', $post->tanggal_lahir) }}" id="tanggal" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="usia">USIA</label>
                    <input type="text" name="usia" value="{{ old('usia', $post->usia) }}" id="usia" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="jenis">JENIS KELAMIN</label>
                    <input type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin', $post->jenis_kelamin) }}" id="jenis" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="bangsa">SUKU BANGSA</label>
                    <input type="text" name="suku" value="{{ old('suku', $post->suku) }}" id="bangsa" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="alamat">ALAMAT</label>
                    <input type="text" name="alamat" value="{{ old('suku', $post->alamat) }}" id="alamat" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="Agama">AGAMA</label>
                    <input type="text" name="agama" value="{{ old('agama', $post->agama) }}" id="Agama" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="status">STATUS PERNIKAHAN</label>
                    <input type="text" name="status" value="{{ old('status', $post->status) }}" id="status" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="phone">NO. TELP</label>
                    <input type="text" name="phone" value="{{ old('phone', $post->phone) }}" id="phone" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="email">EMAIL</label>
                    <input type="text" name="email" value="{{ old('email', $post->email) }}" id="email" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="hobby">HOBI</label>
                    <input type="text" name="hobi" value="{{ old('hobi', $post->hobi) }}" id="hobby" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-violet-500 hover:bg-violet-800 text-white py-2.5 px-8 rounded">EDIT DATA</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection