@extends('app')
@section('content')
<div class="w-full h-full flex flex-col justify-center items-center">
    <div class="text-main text-4xl text-gray-500">
        <span>EDIT DATA KELUARGA ANDA MELALUI FORM DIBAWAH INI</span>
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
        <form action="{{ URL('send/edit/form/' . $secondPost->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form space-y-5">
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="nama">NAMA AYAH</label>
                    <input type="text" name="ayah" value="{{ old('ayah', $secondPost->ayah) }}" id="nama" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="tempat">NAMA IBU</label>
                    <input type="text" name="ibu" value="{{ old('ibu', $secondPost->ibu) }}" id="tempat" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="tanggal">ANAK Ke-1</label>
                    <input type="text" name="anak1" value="{{ old('anak1', $secondPost->anak1) }}" id="tanggal" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="usia">ANAK Ke-2</label>
                    <input type="text" name="anak2" value="{{ old('anak2', $secondPost->anak2) }}" id="usia" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="jenis">ANAK Ke-3</label>
                    <input type="text" name="anak3" value="{{ old('anak3', $secondPost->anak3) }}" id="jenis" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="bangsa">ANAK Ke-4</label>
                    <input type="text" name="anak4" value="{{ old('anak4', $secondPost->anak4) }}" id="bangsa" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="alamat">ANAK Ke-5</label>
                    <input type="text" name="anak5" value="{{ old('anak5', $secondPost->anak5) }}" id="alamat" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="Agama">ANAK Ke-6</label>
                    <input type="text" name="anak6" value="{{ old('anak6', $secondPost->anak6) }}" id="Agama" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                    <label for="status">ANAK Ke-7</label>
                    <input type="text" name="anak7" value="{{ old('anak7', $secondPost->anak7) }}" id="status" class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-violet-500 hover:bg-violet-800 text-white py-2.5 px-8 rounded">EDIT DATA</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection