@extends('app')
@section('content')
<div class="w-full flex justify-center mt-28 mb-10">
    <div class="w-10/12 bg-white shadow-md shadow-gray-400 p-3 rounded-md">
        <form method="post" action="{{ URL('core/' . $core->id) }}">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-5">
                <div class="sd">
                    <div class="mb-6">
                        <label for="couple" class="block mb-2 text-sm font-medium text-gray-900">Istri/Suami</label>
                        <input type="text" name="couple" id="couple" value="{{ old('couple', $core->couple) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jns_klmn" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <input type="text" name="jns_klmn" id="jns_klmn" value="{{ old('jns_klmn', $core->jns_klmn) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tmpt_lhr" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                        <input type="text" name="tmpt_lhr" id="tmpt_lhr" value="{{ old('tmpt_lhr', $core->tmpt_lhr) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tgl_lhr" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="text" name="tgl_lhr" id="tgl_lhr" value="{{ old('tgl_lhr', $core->tgl_lhr) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pendidikan" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan</label>
                        <input type="text" name="pendidikan" id="pendidikan" value="{{ old('pendidikan', $core->pendidikan) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                        <input type="text" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan', $core->pekerjaan) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                </div>
                <div class="">
                    <div class="mb-6">
                        <label for="anak1" class="block mb-2 text-sm font-medium text-gray-900">Anak 1</label>
                        <input type="text" name="anak1" id="anak1" value="{{ old('anak1', $core->anak1) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jns_klmn_anak1" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <input type="text" name="jns_klmn_anak1" id="jns_klmn_anak1" value="{{ old('jns_klmn_anak1', $core->jns_klmn_anak1) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tmpt_lhr_anak1" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                        <input type="text" name="tmpt_lhr_anak1" id="tmpt_lhr_anak1" value="{{ old('tmpt_lhr_anak1', $core->tmpt_lhr_anak1) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tgl_lhr_anak1" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="text" name="tgl_lhr_anak1" id="tgl_lhr_anak1" value="{{ old('tgl_lhr_anak1', $core->tgl_lhr_anak1) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pendidikan_anak1" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan</label>
                        <input type="text" name="pendidikan_anak1" id="pendidikan_anak1" value="{{ old('pendidikan_anak1', $core->pendidikan_anak1) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pekerjaan_anak1" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                        <input type="text" name="pekerjaan_anak1" id="pekerjaan_anak1" value="{{ old('pekerjaan_anak1', $core->pekerjaan_anak1) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                </div>
            </div>
            <hr class="border border-slate-500 mt-4 mb-5">
            <div class="grid grid-cols-2 gap-5">
                <div class="slta">
                    <div class="mb-6">
                        <label for="anak2" class="block mb-2 text-sm font-medium text-gray-900">Anak 2</label>
                        <input type="text" name="anak2" id="anak2" value="{{ old('anak2', $core->anak2) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jns_klmn_anak2" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <input type="text" name="jns_klmn_anak2" id="jns_klmn_anak2" value="{{ old('jns_klmn_anak2', $core->jns_klmn_anak2) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tmpt_lhr_anak2" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                        <input type="text" name="tmpt_lhr_anak2" id="tmpt_lhr_anak2" value="{{ old('tmpt_lhr_anak2', $core->tmpt_lhr_anak2) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tgl_lhr_anak2" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="text" name="tgl_lhr_anak2" id="tgl_lhr_anak2" value="{{ old('tgl_lhr_anak2', $core->tgl_lhr_anak2) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pendidikan_anak2" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan</label>
                        <input type="text" name="pendidikan_anak2" id="pendidikan_anak2" value="{{ old('pendidikan_anak2', $core->pendidikan_anak2) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pekerjaan_anak2" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                        <input type="text" name="pekerjaan_anak2" id="pekerjaan_anak2" value="{{ old('pekerjaan_anak2', $core->pekerjaan_anak2) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                </div>
                <div class="d-3">
                    <div class="mb-6">
                        <label for="anak3" class="block mb-2 text-sm font-medium text-gray-900">Anak 3</label>
                        <input type="text" name="anak3" id="anak3" value="{{ old('anak3', $core->anak3) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jns_klmn_anak3" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <input type="text" name="jns_klmn_anak3" id="jns_klmn_anak3" value="{{ old('jns_klmn_anak3', $core->jns_klmn_anak3) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tmpt_lhr_anak3" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                        <input type="text" name="tmpt_lhr_anak3" id="tmpt_lhr_anak3" value="{{ old('tmpt_lhr_anak3', $core->tmpt_lhr_anak3) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tgl_lhr_anak3" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="text" name="tgl_lhr_anak3" id="tgl_lhr_anak3" value="{{ old('tgl_lhr_anak3', $core->tgl_lhr_anak3) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pendidikan_anak3" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan</label>
                        <input type="text" name="pendidikan_anak3" id="pendidikan_anak3" value="{{ old('pendidikan_anak3', $core->pendidikan_anak3) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pekerjaan_anak3" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                        <input type="text" name="pekerjaan_anak3" id="pekerjaan_anak3" value="{{ old('pekerjaan_anak3', $core->pekerjaan_anak3) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                </div>
            </div>
            <hr class="border border-slate-500 mt-4 mb-5">
            <div class="grid grid-cols-2 gap-5">
                <div class="s1">
                    <div class="mb-6">
                        <label for="anak4" class="block mb-2 text-sm font-medium text-gray-900">Anak 4</label>
                        <input type="text" name="anak4" id="anak4" value="{{ old('anak4', $core->anak4) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jns_klmn_anak4" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <input type="text" name="jns_klmn_anak4" id="jns_klmn_anak4" value="{{ old('jns_klmn_anak4', $core->jns_klmn_anak4) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tmpt_lhr_anak4" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                        <input type="text" name="tmpt_lhr_anak4" id="tmpt_lhr_anak4" value="{{ old('tmpt_lhr_anak4', $core->tmpt_lhr_anak4) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tgl_lhr_anak4" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="text" name="tgl_lhr_anak4" id="tgl_lhr_anak4" value="{{ old('tgl_lhr_anak4', $core->tgl_lhr_anak4) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pendidikan_anak4" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan</label>
                        <input type="text" name="pendidikan_anak4" id="pendidikan_anak4" value="{{ old('pendidikan_anak4', $core->pendidikan_anak4) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pekerjaan_anak4" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                        <input type="text" name="pekerjaan_anak4" id="pekerjaan_anak4" value="{{ old('pekerjaan_anak4', $core->pekerjaan_anak4) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                </div>
                <div class="d-3">
                    <div class="mb-6">
                        <label for="anak5" class="block mb-2 text-sm font-medium text-gray-900">Anak 5</label>
                        <input type="text" name="anak5" id="anak5" value="{{ old('anak5', $core->anak5) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="mb-6">
                        <label for="jns_klmn_anak5" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <input type="text" name="jns_klmn_anak5" id="jns_klmn_anak5" value="{{ old('jns_klmn_anak5', $core->jns_klmn_anak5) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tmpt_lhr_anak5" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                        <input type="text" name="tmpt_lhr_anak5" id="tmpt_lhr_anak5" value="{{ old('tmpt_lhr_anak5', $core->tmpt_lhr_anak5) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="tgl_lhr_anak5" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="text" name="tgl_lhr_anak5" id="tgl_lhr_anak5" value="{{ old('tgl_lhr_anak5', $core->tgl_lhr_anak5) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pendidikan_anak5" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan</label>
                        <input type="text" name="pendidikan_anak5" id="pendidikan_anak5" value="{{ old('pendidikan_anak5', $core->pendidikan_anak5) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
                    <div class="mb-6">
                        <label for="pekerjaan_anak5" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                        <input type="text" name="pekerjaan_anak5" id="pekerjaan_anak5" value="{{ old('pekerjaan_anak5', $core->pekerjaan_anak5) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600"
>
                    </div>
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
