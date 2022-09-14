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
    <div class="w-10/12 h-auto p-4 rounded-lg mt-5 mb-10 bg-white shadow-xl shadow-gray-500">
        <a href="{{ URL('/dashboard') }}"
            class="text-sm text-red-500 hover:text-red-700 transition duration-300">Kembali?</a>
        <div class="mb-5 text-center">
            <span class="text-2xl font-semibold text-gray-500">FORMULIR PT APA SAJA DAH</span>
        </div>
        <form action="{{ URL('/send/form/' . $post->id . '/edit') }}" method="post">
            @csrf
            @method('PUT')
            <div class="form grid grid-cols-2 gap-5">
                <div class="form-ayah shadow-md shadow-gray-400">
                    <div class="form-group text-center space-y-2 flex flex-col">
                        <label for="jumlah">NAMA AYAH</label>
                        <input type="text" name="ayah" id="jumlah" value="{{ old('ayah', $post->ayah) }}"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full p-1">
                    </div>
                    <div
                        class="form-group mt-3 mb-3 border-b border-blue-500 space-x-4 flex justify-center items-center">
                        <span>Gender:</span>
                        <label for="laki" class="cursor-pointer">Laki-Laki
                            <input type="radio" name="gender"  value="Laki-Laki" {{ $post->gender == "Laki-Laki" ? "checked" : '' }} id="laki"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                        <label for="wanita" class="cursor-pointer">Perempuan
                            <input type="radio" name="gender" value="Perempuan" {{ $post->gender == "Perempuan" ? "checked" : '' }}  id="wanita"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col">
                        <label for="tempat">TEMPAT LAHIR</label>
                        <input type="text" name="tempat" value="{{ old('tempat', $post->tempat) }}" id="tempat"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full p-1">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col">
                        <label for="tgl_lahir">TANGGAL LAHIR</label>
                        <input type="text" name="tgl_lahir" value="{{ old('tgl_lahir', $post->tgl_lahir) }}" id="tgl_lahir"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full p-1">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col">
                        <label for="pendidikan">PENDIDIKAN</label>
                        <input type="text" name="pendidikan" value="{{ old('pendidikan', $post->pendidikan) }}" id="pendidikan"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full p-1">
                    </div>
                    <div class="form-group text-center space-y-2 mb-2 flex flex-col">
                        <label for="pekerjaan">PEKERJAAN</label>
                        <input type="text" name="pekerjaan" value="{{ old('pekerjaan', $post->pekerjaan) }}" id="pekerjaan"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full p-1">
                    </div>
                </div>
                <div class="form-ibu shadow-md shadow-gray-400">
                    <div class="form-group text-center space-y-2 flex flex-col">
                        <label for="jumlah">NAMA IBU</label>
                        <input type="text" name="ibu" value="{{ old('ibu', $post->ibu) }}" id="jumlah"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full p-1">
                    </div>
                    <div
                        class="form-group mt-3 mb-3 border-b border-blue-500 space-x-4 flex justify-center items-center">
                        <span>Gender:</span>
                        <label for="gender-laki" class="cursor-pointer">Laki-Laki
                            <input type="radio" {{ $post->gender_ibu == "Laki-Laki" ? "checked" : ''  }} name="gender_ibu" value="Laki-Laki" id="gender-laki"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                        <label for="gender-wanita" class="cursor-pointer">Perempuan
                            <input type="radio" {{ $post->gender_ibu == "Perempuan" ? "checked" : ''  }} name="gender_ibu" value="Perempuan" id="gender-wanita"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col">
                        <label for="tempat_ibu">TEMPAT LAHIR</label>
                        <input type="text" name="tempat_ibu" value="{{ old('tempat_ibu', $post->tempat_ibu) }}" id="tempat_ibu"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full p-1">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col">
                        <label for="tgl_lahir_ibu">TANGGAL LAHIR</label>
                        <input type="text" name="tgl_lahir_ibu" value="{{ old('tgl_lahir_ibu', $post->tgl_lahir_ibu) }}" id="tgl_lahir_ibu"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full p-1">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col">
                        <label for="pendidikan">PENDIDIKAN</label>
                        <input type="text" name="pendidikan_ibu" value="{{ old('pendidikan_ibu', $post->pendidikan_ibu) }}" id="pendidikan"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full p-1">
                    </div>
                    <div class="form-group text-center space-y-2 mb-2 flex flex-col">
                        <label for="pekerjaan">PEKERJAAN</label>
                        <input type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu', $post->pekerjaan_ibu) }}" id="pekerjaan"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full p-1">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5 mt-5 mb-5">
                <div class="anak-ke1 shadow-md shadow-gray-400">
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tanggal">ANAK Ke-1</label>
                        <input type="text" name="anak1" value="{{ old('anak1', $post->anak1) }}" id="tanggal"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div
                        class="form-group mt-3 mb-3 border-b border-blue-500 space-x-4 flex justify-center items-center">
                        <span>Gender:</span>
                        <label for="laki-anak1" class="cursor-pointer">Laki-Laki
                            <input type="radio" {{ $post->gender_anak1 == "Laki-Laki" ? "checked" : ''  }} name="gender_anak1" value="Laki-Laki" id="laki-anak1"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                        <label for="wanita-anak1" class="cursor-pointer">Perempuan
                            <input type="radio" {{ $post->gender_anak1 == "Perempuan" ? "checked" : ''  }} name="gender_anak1" value="Perempuan" id="wanita-anak1"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tempat_anak1">Tempat Lahir</label>
                        <input type="text" name="tempat_anak1" value="{{ old('tempat_anak1', $post->tempat_anak1) }}" id="tempat_anak1"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tgl_lahir_anak1">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir_anak1" value="{{ old('tgl_lahir_anak1', $post->tgl_lahir_anak1) }}" id="tgl_lahir_anak1"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pendidikan_anak1">Pendidikan</label>
                        <input type="text" name="pendidikan_anak1" value="{{ old('pendidikan_anak1', $post->pendidikan_anak1) }}" id="pendidikan_anak1"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pekerjaan_anak1">Pekerjaan</label>
                        <input type="text" value="{{ old('pekerjaan_anak1', $post->pekerjaan_anak1) }}" name="pekerjaan_anak1" id="pekerjaan_anak1"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                </div>
                <div class="anak-ke2 shadow-md shadow-gray-400">
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tanggal">ANAK Ke-2</label>
                        <input type="text" name="anak2" value="{{ old('anak2', $post->anak2) }}" id="tanggal"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div
                        class="form-group mt-3 mb-3 border-b border-blue-500 space-x-4 flex justify-center items-center">
                        <span>Gender:</span>
                        <label for="laki-anak2" class="cursor-pointer">Laki-Laki
                            <input type="radio" {{ $post->gender_anak2 == "Laki-Laki" ? "checked" : ''  }} name="gender_anak2" value="Laki-Laki" id="laki-anak2"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                        <label for="wanita-anak2" class="cursor-pointer">Perempuan
                            <input type="radio" {{ $post->gender_anak2 == "Perempuan" ? "checked" : ''  }} name="gender_anak2" value="Perempuan" id="wanita-anak2"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tempat_anak2">Tempat Lahir</label>
                        <input type="text" name="tempat_anak2" value="{{ old('tempat_anak2', $post->tempat_anak2) }}" id="tempat_anak2"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tgl_lahir_anak2">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir_anak2" value="{{ old('tgl_lahir_anak2', $post->tgl_lahir_anak2) }}" id="tgl_lahir_anak2"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pendidikan_anak2">Pendidikan</label>
                        <input type="text" name="pendidikan_anak2" value="{{ old('pendidikan_anak2', $post->pendidikan_anak2) }}" id="pendidikan_anak2"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pekerjaan_anak2">Pekerjaan</label>
                        <input type="text" value="{{ old('pekerjaan_anak2', $post->pekerjaan_anak2) }}" name="pekerjaan_anak2" id="pekerjaan_anak2"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5 mt-5 mb-5">
                <div class="anak-ke3 shadow-md shadow-gray-400">
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="anak3">ANAK Ke-3</label>
                        <input type="text" name="anak3" value="{{ old('anak3', $post->anak3) }}" id="anak3"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div
                        class="form-group mt-3 mb-3 border-b border-blue-500 space-x-4 flex justify-center items-center">
                        <span>Gender:</span>
                        <label for="laki-anak3" class="cursor-pointer">Laki-Laki
                            <input type="radio" {{ $post->gender_anak3 == "Laki-Laki" ? "checked" : ''  }} name="gender_anak3" value="Laki-Laki" id="laki-anak3"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                        <label for="wanita-anak3" class="cursor-pointer">Perempuan
                            <input type="radio" {{ $post->gender_anak3 == "Perempuan" ? "checked" : ''  }} name="gender_anak3" value="Perempuan" id="wanita-anak3"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tempat_anak3">Tempat Lahir</label>
                        <input type="text" name="tempat_anak3" value="{{ old('tempat_anak3', $post->tempat_anak3) }}" id="tempat_anak3"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tgl_lahir_anak3">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir_anak3" value="{{ old('tgl_lahir_anak3', $post->tgl_lahir_anak3) }}" id="tgl_lahir_anak3"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pendidikan_anak3">Pendidikan</label>
                        <input type="text" name="pendidikan_anak3" value="{{ old('pendidikan_anak3', $post->pendidikan_anak3) }}" id="pendidikan_anak3"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pekerjaan_anak3">Pekerjaan</label>
                        <input type="text" name="pekerjaan_anak3" value="{{ old('pekerjaan_anak3', $post->pekerjaan_anak3) }}" id="pekerjaan_anak3"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                </div>
                <div class="anak-ke4 shadow-md shadow-gray-400">
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="anak4">ANAK Ke-4</label>
                        <input type="text" name="anak4" value="{{ old('anak4', $post->anak4) }}" id="anak4"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div
                        class="form-group mt-3 mb-3 border-b border-blue-500 space-x-4 flex justify-center items-center">
                        <span>Gender:</span>
                        <label for="laki-anak4" class="cursor-pointer">Laki-Laki
                            <input type="radio" {{ $post->gender_anak4 == "Laki-Laki" ? "checked" : ''  }} name="gender_anak4" value="Laki-Laki" id="laki-anak4"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                        <label for="wanita-anak4" class="cursor-pointer">Perempuan
                            <input type="radio" {{ $post->gender_anak4 == "Perempuan" ? "checked" : ''  }} name="gender_anak4" value="Perempuan" id="wanita-anak4"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tempat_anak4">Tempat Lahir</label>
                        <input type="text" name="tempat_anak4" value="{{ old('tempat_anak4', $post->tempat_anak4) }}" id="tempat_anak4"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tgl_lahir_anak4">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir_anak4" value="{{ old('tgl_lahir_anak4', $post->tgl_lahir_anak4) }}" id="tgl_lahir_anak4"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pendidikan_anak4">Pendidikan</label>
                        <input type="text" name="pendidikan_anak4" value="{{ old('pendidikan_anak4', $post->pendidikan_anak4) }}" id="pendidikan_anak4"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pekerjaan_anak4">Pekerjaan</label>
                        <input type="text" name="pekerjaan_anak4" value="{{ old('pekerjaan_anak4', $post->pekerjaan_anak4) }}" id="pekerjaan_anak4"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5 mt-5 mb-5">
                <div class="anak-ke5 shadow-md shadow-gray-400">
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="anak5">ANAK Ke-5</label>
                        <input type="text" name="anak5" value="{{ old('anak5', $post->anak5) }}" id="anak5"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div
                        class="form-group mt-3 mb-3 border-b border-blue-500 space-x-4 flex justify-center items-center">
                        <span>Gender:</span>
                        <label for="laki-anak5" class="cursor-pointer">Laki-Laki
                            <input type="radio" {{ $post->gender_anak5 == "Laki-Laki" ? "checked" : ''  }} name="gender_anak5" value="Laki-Laki" id="laki-anak5"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-500 focus:ring-blue-500 focus:ring-2">
                        </label>
                        <label for="wanita-anak5" class="cursor-pointer">Perempuan
                            <input type="radio" {{ $post->gender_anak5 == "Perempuan" ? "checked" : ''  }} name="gender_anak5" value="Perempuan" id="wanita-anak5"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-500 focus:ring-blue-500 focus:ring-2">
                        </label>
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tempat_anak5">Tempat Lahir</label>
                        <input type="text" name="tempat_anak5" value="{{ old('tempat_anak5', $post->tempat_anak5) }}" id="tempat_anak5"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tgl_lahir_anak5">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir_anak5" value="{{ old('tgl_lahir_anak5', $post->tgl_lahir_anak5) }}" id="tgl_lahir_anak5"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pendidikan_anak5">Pendidikan</label>
                        <input type="text" name="pendidikan_anak5" value="{{ old('pendidikan_anak5', $post->pendidikan_anak5) }}" id="pendidikan_anak5"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pekerjaan_anak5">Pekerjaan</label>
                        <input type="text" name="pekerjaan_anak5" value="{{ old('pekerjaan_anak5', $post->pekerjaan_anak5) }}" id="pekerjaan_anak5"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                </div>
                <div class="anak-ke4 shadow-md shadow-gray-400">
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="anak6">ANAK Ke-6</label>
                        <input type="text" name="anak6" value="{{ old('anak6', $post->anak6) }}" id="anak6"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div
                        class="form-group mt-3 mb-3 border-b border-blue-500 space-x-4 flex justify-center items-center">
                        <span>Gender:</span>
                        <label for="laki-anak6" class="cursor-pointer">Laki-Laki
                            <input type="radio" {{ $post->gender_anak6 == "Laki-Laki" ? "checked" : ''  }} name="gender_anak6" value="Laki-Laki" id="laki-anak6"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                        <label for="wanita-anak6" class="cursor-pointer">Perempuan
                            <input type="radio" {{ $post->gender_anak6 == "Perempuan" ? "checked" : ''  }} name="gender_anak6" value="Perempuan" id="wanita-anak6"
                                class="w-3 h-3 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tempat_anak6">Tempat Lahir</label>
                        <input type="text" name="tempat_anak6" value="{{ old('tempat_anak6', $post->tempat_anak6) }}" id="tempat_anak6"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tgl_lahir_anak6">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir_anak6" value="{{ old('tgl_lahir_anak6', $post->tgl_lahir_anak6) }}" id="tgl_lahir_anak6"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pendidikan_anak6">Pendidikan</label>
                        <input type="text" name="pendidikan_anak6" value="{{ old('pendidikan_anak6', $post->pendidikan_anak6) }}" id="pendidikan_anak6"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pekerjaan_anak6">Pekerjaan</label>
                        <input type="text" value="{{ old('pekerjaan_anak6', $post->pekerjaan_anak6) }}" name="pekerjaan_anak6" id="pekerjaan_anak6"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="anak-ke w-2/4 shadow-md shadow-gray-400">
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="anak7">ANAK Ke-7</label>
                        <input type="text" name="anak7" value="{{ old('anak7', $post->anak7) }}" id="anak7"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div
                        class="form-group mt-3 mb-3 border-b border-blue-500 space-x-4 flex justify-center items-center">
                        <span>Gender:</span>
                        <label for="laki-anak7" class="cursor-pointer">Laki-Laki
                            <input type="radio" name="gender_anak7" {{ $post->gender_anak7 == "Laki-Laki" ? "checked" : ''  }} value="Laki-Laki" id="laki-anak7"
                                class="w-3 h-3 text-blue-700 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                        <label for="wanita-anak7" class="cursor-pointer">Perempuan
                            <input type="radio" {{ $post->gender_anak7 == "Perempuan" ? "checked" : ''  }} name="gender_anak7" value="Perempuan" id="wanita-anak7"
                                class="w-3 h-3 text-blue-700 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </label>
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tempat_anak7">Tempat Lahir</label>
                        <input type="text" name="tempat_anak7" value="{{ old('tempat_anak7', $post->tempat_anak7) }}" id="tempat_anak7"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="tgl_lahir_anak7">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir_anak7" value="{{ old('tgl_lahir_anak7', $post->tgl_lahir_anak7) }}" id="tgl_lahir_anak7"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pendidikan_anak7">Pendidikan</label>
                        <input type="text" name="pendidikan_anak7" value="{{ old('pendidikan_anak7', $post->pendidikan_anak7) }}" id="pendidikan_anak7"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                    <div class="form-group text-center space-y-2 flex flex-col transition duration-300">
                        <label for="pekerjaan_anak7">Pekerjaan</label>
                        <input type="text" value="{{ old('pekerjaan_anak7', $post->pekerjaan_anak7) }}" name="pekerjaan_anak7" id="pekerjaan_anak7"
                            class="focus:outline-none border-b border-blue-500 focus:border-b-2 focus:border-blue-700 all-input w-full">
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="bg-violet-500 hover:bg-violet-800 text-white py-2.5 px-8 rounded">EDIT
                    DATA</button>
            </div>
    </div>
    </form>
</div>
</div>
@endsection
