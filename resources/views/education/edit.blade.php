@extends('app')
@section('content')
<div class="w-full flex justify-center mt-28 mb-10">
    <div class="w-10/12 bg-white shadow-md shadow-gray-400 p-3 rounded-md">
        <form method="post" action="{{ URL('education/' . $post->id) }}">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-5">
                <div class="sd">
                    <div class="mb-6">
                        <label for="sekolah" class="block mb-2 text-sm font-medium text-gray-900">Sekola SD</label>
                        <input type="text" name="sekolah" id="sekolah" value="{{ old('sekolah', $post->sekolah) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan" value="{{ old('jurusan', $post->jurusan) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="kota" class="block mb-2 text-sm font-medium text-gray-900">Kota</label>
                        <input type="text" name="kota" id="kota" value="{{ old('kota', $post->kota) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_mulai" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Mulai</label>
                        <input type="text" name="tahun_mulai" id="tahun_mulai" value="{{ old('tahun_mulai', $post->tahun_mulai) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_akhir" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Selesai</label>
                        <input type="text" name="tahun_akhir" id="tahun_akhir" value="{{ old('tahun_akhir', $post->tahun_akhir) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                </div>
                <div class="smp">
                    <div class="mb-6">
                        <label for="sekolah_smp" class="block mb-2 text-sm font-medium text-gray-900">Sekola SMP</label>
                        <input type="text" name="sekolah_smp" id="sekolah_smp" value="{{ old('sekolah_smp', $post->sekolah_smp) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jurusan_smp" class="block mb-2 text-sm font-medium text-gray-900">Jurusan
                            SMP</label>
                        <input type="text" name="jurusan_smp" id="jurusan_smp" value="{{ old('jurusan_smp', $post->jurusan_smp) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="kota_smp" class="block mb-2 text-sm font-medium text-gray-900">Kota</label>
                        <input type="text" name="kota_smp" id="kota_smp" value="{{ old('kota_smp', $post->kota_smp) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_mulai_smp" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Mulai</label>
                        <input type="text" name="tahun_mulai_smp" value="{{ old('tahun_mulai_smp', $post->tahun_mulai_smp) }}" id="tahun_mulai_smp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_akhir_smp" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Selesai</label>
                        <input type="text" name="tahun_akhir_smp" value="{{ old('tahun_akhir_smp', $post->tahun_akhir_smp) }}" id="tahun_akhir_smp"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                </div>
            </div>
            <hr class="border border-slate-500 mt-4 mb-5">
            <div class="grid grid-cols-2 gap-5">
                <div class="slta">
                    <div class="mb-6">
                        <label for="sekolah_slta" class="block mb-2 text-sm font-medium text-gray-900">Sekolah
                            SLTA</label>
                        <input type="text" name="sekolah_slta" id="sekolah_slta" value="{{ old('sekolah_slta', $post->sekolah_slta) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jurusan_slta" class="block mb-2 text-sm font-medium text-gray-900">Jurusan
                            SLTA</label>
                        <input type="text" name="jurusan_slta" id="jurusan_slta" value="{{ old('jurusan_slta', $post->jurusan_slta) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="kota_slta" class="block mb-2 text-sm font-medium text-gray-900">Kota</label>
                        <input type="text" name="kota_slta" value="{{ old('kota_slta', $post->kota_slta) }}" id="kota_slta"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_mulai_slta" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Mulai</label>
                        <input type="text" name="tahun_mulai_slta" value="{{ old('tahun_mulai_slta', $post->tahun_mulai_slta) }}" id="tahun_mulai_slta"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_akhir_slta" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Selesai</label>
                        <input type="text" name="tahun_akhir_slta" value="{{ old('tahun_akhir_slta', $post->tahun_akhir_slta) }}" id="tahun_akhir_slta"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                </div>
                <div class="d-3">
                    <div class="mb-6">
                        <label for="sekolah_d3" class="block mb-2 text-sm font-medium text-gray-900">Sekola
                            D3/Akademi</label>
                        <input type="text" name="sekolah_d3" value="{{ old('sekolah_d3', $post->sekolah_d3) }}" id="sekolah_d3"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jurusan_d3" class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                        <input type="text" name="jurusan_d3" value="{{ old('jurusan_d3', $post->jurusan_d3) }}" id="jurusan_d3"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="kota_d3" class="block mb-2 text-sm font-medium text-gray-900">Kota</label>
                        <input type="text" name="kota_d3" id="kota_d3" value="{{ old('kota_d3', $post->kota_d3) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_mulai_d3" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Mulai</label>
                        <input type="text" name="tahun_mulai_d3" value="{{ old('tahun_mulai_d3', $post->tahun_mulai_d3) }}" id="tahun_mulai_d3"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_akhir_d3" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Selesai</label>
                        <input type="text" name="tahun_akhir_d3" value="{{ old('tahun_akhir_d3', $post->tahun_akhir_d3) }}" id="tahun_akhir_d3"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                </div>
            </div>
            <hr class="border border-slate-500 mt-4 mb-5">
            <div class="grid grid-cols-2 gap-5">
                <div class="s1">
                    <div class="mb-6">
                        <label for="sekolah_s1" class="block mb-2 text-sm font-medium text-gray-900">Sekolah S1</label>
                        <input type="text" name="sekolah_s1" value="{{ old('sekolah_s1', $post->sekolah_s1) }}" id="sekolah_s1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jurusan_s1" class="block mb-2 text-sm font-medium text-gray-900">Jurusan S1</label>
                        <input type="text" name="jurusan_s1" value="{{ old('jurusan_s1', $post->jurusan_s1) }}" id="jurusan_s1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="kota_s1" class="block mb-2 text-sm font-medium text-gray-900">Kota</label>
                        <input type="text" name="kota_s1" value="{{ old('kota_s1', $post->kota_s1) }}" id="kota_s1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_mulai_s1" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Mulai</label>
                        <input type="text" name="tahun_mulai_s1" value="{{ old('tahun_mulai_s1', $post->tahun_mulai_s1) }}" id="tahun_mulai_s1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_akhir_s1" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Selesai</label>
                        <input type="text" name="tahun_akhir_s1" value="{{ old('tahun_akhir_s1', $post->tahun_akhir_s1) }}" id="tahun_akhir_s1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                </div>
                <div class="s-2">
                    <div class="mb-6">
                        <label for="sekolah_s2" class="block mb-2 text-sm font-medium text-gray-900">Sekolah S2</label>
                        <input type="text" name="sekolah_s2" value="{{ old('sekolah_s2', $post->sekolah_s2) }}" id="sekolah_s2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jurusan_s2" class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                        <input type="text" name="jurusan_s2" value="{{ old('jurusan_s2', $post->jurusan_s2) }}" id="jurusan_s2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="kota_s2" class="block mb-2 text-sm font-medium text-gray-900">Kota</label>
                        <input type="text" name="kota_s2" value="{{ old('kota_s2', $post->kota_s2) }}" id="kota_s2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_mulai_s2" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Mulai</label>
                        <input type="text" name="tahun_mulai_s2" value="{{ old('tahun_mulai_s2', $post->tahun_mulai_s2) }}" id="tahun_mulai_s2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                    <div class="mb-6">
                        <label for="tahun_akhir_s2" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                            Selesai</label>
                        <input type="text" name="tahun_akhir_s2" value="{{ old('tahun_akhir_s2', $post->tahun_akhir_s2) }}" id="tahun_akhir_s2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                            >
                    </div>
                </div>
            </div>
            <hr class="border border-slate-500">
            <div class="s3 flex flex-col justify-center mt-4">
                <div class="mb-6">
                    <label for="sekolah_s3" class="block mb-2 text-sm font-medium text-gray-900">Sekolah S3</label>
                    <input type="text" name="sekolah_s3" id="sekolah_s3" value="{{ old('sekolah_s3', $post->sekolah_s3) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                </div>
                <div class="mb-6">
                    <label for="jurusan_s3" class="block mb-2 text-sm font-medium text-gray-900">Jurusan</label>
                    <input type="text" name="jurusan_s3" id="jurusan_s3" value="{{ old('jurusan_s3', $post->jurusan_s3) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                        >
                </div>
                <div class="mb-6">
                    <label for="kota_s3" class="block mb-2 text-sm font-medium text-gray-900">Kota</label>
                    <input type="text" name="kota_s3" id="kota_s3" value="{{ old('kota_s3', $post->kota_s3) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                        >
                </div>
                <div class="mb-6">
                    <label for="tahun_mulai_s3" class="block mb-2 text-sm font-medium text-gray-900">Tahun Mulai</label>
                    <input type="text" name="tahun_mulai_s3" value="{{ old('tahun_mulai_s3', $post->tahun_mulai_s3) }}" id="tahun_mulai_s3"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                        >
                </div>
                <div class="mb-6">
                    <label for="tahun_akhir_s3" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                        Selesai</label>
                    <input type="text" name="tahun_akhir_s3" id="tahun_akhir_s3" value="{{ old('tahun_akhir_s3', $post->tahun_akhir_s3) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
                        >
                </div>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SIMPAN</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
