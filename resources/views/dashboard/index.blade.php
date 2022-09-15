@extends('app')
@section('content')
<div class="w-full h-full flex flex-col justify-center items-center">
    <div class="hello-text text-center mt-10">
        <span class="text-2xl text-gray-600">Hello, <b>{{ auth()->user()->username }}</b> selamat datang pada PT
            kami.</span>
    </div>
    <div class="flex space-x-5 mt-7">
        <form action="{{ route('user.logout') }}" method="post">
            @csrf
            <button type="submit"
                class="py-2.5 px-8 border-2 border-red-500 text-red-500 rounded-full hover:bg-red-500 hover:text-white transition duration-300"
                onclick="return(confirm('Yakin mau logout?'))">LOGOUT</button>
        </form>
    </div>
    <div class="flex space-x-4 items-center mt-3">
        <a href="{{ URL('dashboard/create') }}"
            class="py-2.5 px-8 border-2 border-blue-500 text-blue-500 rounded-full hover:bg-blue-500 hover:text-white transition duration-300">ISI
            DATA DIRI</a>
        <a href="{{ URL('create/second/form') }}"
            class="py-2.5 px-8 border-2 border-emerald-500 text-emerald-500 rounded-full hover:bg-emerald-500 hover:text-white transition duration-300">ISI
            DATA KELUARGA</a>
    </div>
    @if ($message = Session::get('create'))
    <div class="mt-3 w-3/4 bg-green-500 text-white text-center p-2 rounded-xl">
        <span class="text-xl">{{ $message }}</span>
    </div>
    @elseif ($message = Session::get('update'))
    <div class="mt-3 w-3/4 bg-green-500 text-white text-center p-2 rounded-xl">
        <span class="text-xl">{{ $message }}</span>
    </div>
    @elseif ($message = Session::get('delete'))
    <div class="mt-3 w-3/4 bg-red-500 text-white text-center p-2 rounded-xl">
        <span class="text-xl">{{ $message }}</span>
    </div>
    @endif
    <div class="flex justify-center w-full">
        <div class="bg-gray-500 w-2/3 shadow-lg mt-5 p-2 rounded-t-lg">
            <div class="text-up text-center text-white">
                <span>TABLE PT APA AJA ASAL JADI</span>
            </div>
        </div>
    </div>
    @if (!is_null($userPosts))
    <div class="button-edit flex space-x-4 items-center text-center mt-5">
        <a href="{{ url('dashboard/' . $userPosts->nama . '/edit') }}"
            class="py-3 px-6 rounded-full bg-orange-500 hover:bg-orange-400 text-white">EDIT DATA DIRI</a>
        <form action="{{ URL('dashboard/' . $userPosts->nama) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 hover:bg-red-400 py-2.5 px-6 rounded-full text-white"
                onclick="return(confirm('Yakin mau hapus data?'))">DELETE DATA?</button>
        </form>
    </div>
    <div class="overflow-x-auto shadow-md shadow-gray-400 mx-5 relative mt-5">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        NAMA LENGKAP
                    </th>
                    <th scope="col" class="py-3 px-6">
                        TEMPAT/TANGGAL LAHIR
                    </th>
                    <th scope="col" class="py-3 px-6">
                        USIA
                    </th>
                    <th scope="col" class="py-3 px-6">
                        JENIS KELAMIN
                    </th>
                    <th scope="col" class="py-3 px-6">
                        SUKU BANGSA
                    </th>
                    <th scope="col" class="py-3 px-6">
                        AGAMA
                    </th>
                    <th scope="col" class="py-3 px-6">
                        ALAMAT
                    </th>
                    <th scope="col" class="py-3 px-6">
                        STATUS PERNIKAHAN
                    </th>
                    <th scope="col" class="py-3 px-6">
                        NO. TELP
                    </th>
                    <th scope="col" class="py-3 px-6">
                        EMAIL
                    </th>
                    <th scope="col" class="py-3 px-6">
                        HOBI
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $userPosts->nama }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $userPosts->tempat_lahir }}/{{ $userPosts->tanggal_lahir }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $userPosts->usia }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $userPosts->jenis_kelamin }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $userPosts->suku }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $userPosts->agama }}}
                    </td>
                    <td class="py-4 px-6">
                        {{ $userPosts->alamat }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $userPosts->status }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $userPosts->phone }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $userPosts->email }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $userPosts->hobi }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @foreach ($secondPosts as $post)
    <div class="button-edit flex space-x-4 items-center text-center mt-5">
        <a href="{{ url('edit/second/form/' . $post->id) }}"
            class="py-3 px-6 rounded-full bg-orange-500 hover:bg-orange-400 text-white">EDIT DATA KELUARGA</a>
        <form action="{{ URL('delete/' . $post->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 hover:bg-red-400 py-2.5 px-6 rounded-full text-white"
                onclick="return(confirm('Yakin mau hapus data?'))">DELETE DATA?</button>
        </form>
    </div>

    <div class="overflow-x-auto w-2/3 mt-5 mb-10 shadow-gray-500 relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        L/P
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Tempat/ Tanggal Lahir
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Pendidikan
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Pekerjaan
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Ayah
                    </th>
                    <td class="py-4 px-6">
                        {{ $post->ayah }}
                    </td>
                    <td class="py-4">
                        {{  $post->gender }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->tempat }}/{{ $post->tgl_lahir }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pendidikan }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pekerjaan }}
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Ibu
                    </th>
                    <td class="py-4 px-6">
                        {{ $post->ibu }}
                    </td>
                    <td class="py-4">
                        {{  $post->gender_ibu }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->tempat_ibu }}/{{ $post->tgl_lahir_ibu }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pendidikan_ibu }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pekerjaan_ibu }}
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Anak ke-1
                    </th>
                    <td class="py-4 px-6">
                        {{ $post->anak1 ?: 'Tidak Punya' }}
                    </td>
                    <td class="py-4">
                        {{ $post->gender_anak1 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->tempat_anak1 ?: '-' }}/{{ $post->tgl_lahir_anak1 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pendidikan_anak1 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pekerjaan_anak1 ?: '-' }}
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Anak ke-2
                    </th>
                    <td class="py-4 px-6">
                        {{ $post->anak2 ?: 'Tidak Punya' }}
                    </td>
                    <td class="py-4">
                        {{ $post->gender_anak2 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->tempat_anak2 ?: '-' }}/{{ $post->tgl_lahir_anak2 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pendidikan_anak2 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pekerjaan_anak2 ?: '-' }}
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Anak ke-3
                    </th>
                    <td class="py-4 px-6">
                        {{ $post->anak3 ?: 'Tidak Punya' }}
                    </td>
                    <td class="py-4">
                        {{ $post->gender_anak3 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->tempat_anak3 ?: '-' }}/{{ $post->tgl_lahir_anak3 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pendidikan_anak3 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pekerjaan_anak3 ?: '-' }}
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Anak ke-4
                    </th>
                    <td class="py-4 px-6">
                        {{ $post->anak4 ?: 'Tidak Punya' }}
                    </td>
                    <td class="py-4">
                        {{ $post->gender_anak4 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->tempat_anak4 ?: '-' }}/{{ $post->tgl_lahir_anak4 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pendidikan_anak4 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pekerjaan_anak4 ?: '-' }}
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Anak ke-5
                    </th>
                    <td class="py-4 px-6">
                        {{ $post->anak5 ?: 'Tidak Punya' }}
                    </td>
                    <td class="py-4">
                        {{ $post->gender_anak5 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->tempat_anak5 ?: '-' }}/{{ $post->tgl_lahir_anak5 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pendidikan_anak5 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pekerjaan_anak5 ?: '-' }}
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="bg-gray-200 border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Anak ke-6
                    </th>
                    <td class="py-4 px-6">
                        {{ $post->anak6 ?: 'Tidak Punya' }}
                    </td>
                    <td class="py-4">
                        {{ $post->gender_anak6 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->tempat_anak6 ?: '-' }}/{{ $post->tgl_lahir_anak6 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pendidikan_anak6 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pekerjaan_anak6 ?: '-' }}
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Anak ke-7
                    </th>
                    <td class="py-4 px-6">
                        {{ $post->anak7 ?: 'Tidak Punya' }}
                    </td>
                    <td class="py-4">
                        {{ $post->gender_anak7 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->tempat_anak7 ?: '-' }}/{{ $post->tgl_lahir_anak7 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pendidikan_anak7 ?: '-' }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $post->pekerjaan_anak7 ?: '-' }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach
    <div class="mb-8 w-3/4 mt-5">
        <div class="text-header text-center mb-8">
            <p class="mb-4">ISI FORM RIWAYAT PENDIDIKAN</p>
            <a href="{{ URL('education/create') }}"
                class="py-2.5 px-6 rounded-full outline outline-indigo-500 hover:bg-indigo-500 hover:text-white">ISI
                DATA
                RIWAYAT PENDIDIKAN</a>
        </div>
        @if (!is_null($history))
        <div class="button-community text-center flex justify-center items-center space-x-4">
            <a class="py-2.5 px-6 rounded-full outline outline-orange-500 hover:bg-orange-500 hover:text-white"
                href="{{ URL('education/' . $history->id . '/edit') }}">EDIT DATA RIWAYAT PENDIDIKAN</a>
            <form action="{{ url('education/' . $history->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button
                    class="py-2.5 px-6 rounded-full outline outline-red-500 hover:bg-red-500 hover:text-white">DELETE
                    RIWAYAT PENDIDIKAN</button>
            </form>
        </div>
        <div class="mt-5">
            <p class="text-xl mb-3 text-gray-500">RIWAYAT PENDIDIKAN</p>
            <div class="relative shadow-md shadow-gray-400 sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Pendidikan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Nama Sekolah
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Jurusan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Kota
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Thn s/d Thn
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                SD
                            </th>
                            <td class="py-4 px-6">
                                {{ $history->sekolah }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->jurusan }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->kota }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->tahun_mulai }}/{{ $history->tahun_akhir }}
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                SMP
                            </th>
                            <td class="py-4 px-6">
                                {{ $history->sekolah_smp }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->jurusan_smp }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->kota_smp }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->tahun_mulai_smp }}/{{ $history->tahun_akhir_smp }}
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                SLTA
                            </th>
                            <td class="py-4 px-6">
                                {{ $history->sekolah_slta }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->jurusan_slta }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->kota_slta }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->tahun_mulai_slta }}/{{ $history->tahun_akhir_slta }}
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                D3/Akademik
                            </th>
                            <td class="py-4 px-6">
                                {{ $history->sekolah_d3 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->jurusan_d3 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->kota_d3 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->tahun_mulai_d3 }}/{{ $history->tahun_akhir_d3 }}
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                S1
                            </th>
                            <td class="py-4 px-6">
                                {{ $history->sekolah_s1 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->jurusan_s1 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->kota_s1 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->tahun_mulai_s1 }}/{{ $history->tahun_akhir_s1 }}
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                S2
                            </th>
                            <td class="py-4 px-6">
                                {{ $history->sekolah_s2 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->jurusan_s2 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->kota_s2 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->tahun_mulai_s2 }}/{{ $history->tahun_akhir_s2 }}
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                S3
                            </th>
                            <td class="py-4 px-6">
                                {{ $history->sekolah_s3 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->jurusan_s3 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->kota_s3 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $history->tahun_mulai_s3 }}/{{ $history->tahun_akhir_s3 }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <div class="flex justify-center mt-5">
            <div class="w-3/4 bg-white p-2 shadow-md shadow-gray-400 rounded text-center">
                <p class="text-xl text-gray-500">Belum Ada Data Mengenai Riwayat Pendidikan</p>
            </div>
        </div>
        @endif
    </div>
    <div class="mb-4 w-3/4">
        <div class="text-header text-center mb-5">
            <p class="mb-4">ISIKAN DATA RIWAYAT PENDIDIKAN NON FORMAL</p>
            <a class="py-2.5 px-6 rounded-full outline outline-emerald-500 hover:bg-emerald-500 hover:text-white"
                href="{{ URL('education/non/formal/create') }}">ISI DATA RIWAYAT PENDIDIKAN NON FORMAL</a>
        </div>
        @if (!is_null($edu))
        <div class="button-community text-center flex justify-center items-center space-x-4 mb-4">
            <a class="py-2.5 px-6 rounded-full outline outline-sky-500 hover:bg-sky-500 hover:text-white"
                href="{{ URL('education/non/formal/' . $edu->id . '/edit') }}">EDIT DATA RIWAYAT PENDIDIKAN NON
                FORMAL</a>
            <form action="{{ url('education/non/formal/' . $edu->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button
                    class="py-2.5 px-6 rounded-full outline outline-red-500 hover:bg-red-500 hover:text-white">DELETE
                    RIWAYAT PENDIDIKAN NON FORMAL</button>
            </form>
        </div>
        <div class="overflow-x-auto shadow-md shadow-gray-400 relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Jenis Kursus/Training
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Tempat
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Tahun
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Keterangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $edu->kursus }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $edu->tempat }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $edu->tahun }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $edu->ket }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @else
        <div class="flex justify-center mt-5">
            <div class="w-3/4 bg-white p-2 shadow-md shadow-gray-400 rounded text-center">
                <p class="text-xl text-gray-500">Belum Ada Data Mengenai Riwayat Pendidikan Non Formal</p>
            </div>
        </div>
        @endif
    </div>
    <div class="mb-8 w-3/4 mt-5">
        <div class="text-header text-center mb-8">
            <p class="mb-4">ISI FORM BERIKUT JIKA PERNAH MENGIKUTI SUATU ORGANISASI</p>
            <a href="{{ URL('community/create') }}"
                class="py-2.5 px-6 rounded-full outline outline-blue-500 hover:bg-blue-500 hover:text-white">ISI DATA
                ORGANISASI</a>
        </div>
        @if (!is_null($postCommunity))
        <div class="button-community text-center">
            <a class="py-2.5 px-6 rounded-full outline outline-orange-500 hover:bg-orange-500 hover:text-white"
                href="{{ URL('community/' . $postCommunity->id . '/edit') }}">EDIT DATA ORGANISASI</a>
        </div>
        <div class="mt-5">
            <p class="text-sm mb-3 text-gray-500">Organisasi yang pernah di-ikuti</p>
            <div class="relative shadow-md shadow-gray-400 sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Organisasi
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Tahun
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Jabatan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Keterangan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $postCommunity->organisasi }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $postCommunity->tahun }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $postCommunity->jabtan }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $postCommunity->ket }}
                            </td>
                            <td class="py-4 px-6">
                                <form action="{{ URL('community/' . $postCommunity->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return(confirm('Yakin mau hapus?'))"
                                        class="text-red-500 hover:text-red-400 hover:border-b hover:border-red-500">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <div class="flex justify-center mt-5">
            <div class="w-3/4 bg-white p-2 shadow-md shadow-gray-400 rounded text-center">
                <p class="text-xl text-gray-500">Belum Ada Data Mengenai Organisasi</p>
            </div>
        </div>
        @endif
    </div>
    @else
    <div class="bg-white w-3/4 p-2 mt-2 text-center rounded-md shadow-md shadow-gray-500">
        <span class="text-gray-500 text-xl">BELUM ADA DATA DIRI</span>
    </div>
    @endif
    <div class="mt-5 mb-10 w-3/4 p-2">
        <div class="text-upper-data-worker text-center mb-4">
            <p>ISI FORM DATA PEKERJAAN</p>
        </div>
        <div class="button-data-worker mb-5 text-center">
            <a href="data/worker/create"
                class="py-2.5 px-6 rounded-full outline outline-amber-500 hover:bg-amber-500 hover:text-white">ISI DATA
                PEKERJAAN</a>
        </div>
        @if (!is_null($worker))
        <div class="mb-5 flex justify-center space-x-4">
            <a href="{{ url('data/worker/' . $worker->id . '/edit') }}"
                class="py-2.5 px-6 rounded-full outline outline-purple-500 hover:bg-purple-500 hover:text-white">EDIT
                DATA WORKER</a>
            <form action="{{ url('data/worker/' . $worker->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button
                    class="py-2.5 px-6 rounded-full outline outline-emerald-800 hover:bg-emerald-800 hover:text-white">DELETE
                    DATA WORKER</button>
            </form>
        </div>
        <div class="bg-white p-4 shadow-md shadow-gray-400">
            <div class="overflow-x-auto relative  shadow-sm shadow-gray-300 rounded">
                <table class="w-full text-sm text-left text-gray-500  dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Nama Perusahaan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Bulan/Tgl S/D Bulan/Tgl
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Jabatan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Gaji
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $worker->nama }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $worker->tgl_mulai }}/{{ $worker->tgl_akhir }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $worker->jabatan }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $worker->gaji }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-upper mt-3">
                <p class="text-sm text-gray-600">2. Uraian tugas untuk dua posisi terakhir bidang pekerjaan diatas.</p>
            </div>
            <div class="text-inner text-sm text-gray-600 indent-10">
                <p>1) Jabatan: <b>{{ $worker->jabatan }}</b></p>
                <p class="ml-4">Uraian Tugas: {{ $worker->uraian }}</p>
            </div>
            <div class="text-upper text-sm text-gray-600 mt-3">
                <p>3. Aspek/Situasi/Kondisi apa saja yang membuat anda dapat optimal dalam bekerja.Jelaskan!</p>
                <p><b>Jawab:</b> {{ $worker->answer }}</p>
            </div>
        </div>
        @else
        <div class="flex justify-center">
            <div class="bg-white w-3/4 p-2 mt-2 text-center rounded-md shadow-md shadow-gray-500">
                <span class="text-gray-500 text-xl">BELUM ADA DATA PEKERJAAN</span>
            </div>
        </div>
        @endif
    </div>
    <div class="mt-5 mb-5 w-3/4">
        <div class="button-data-worker mb-5 text-center">
            <a href="minat/create"
                class="py-2.5 px-6 rounded-full outline outline-yellow-200 hover:bg-yellow-200 hover:text-white">JAWAB
                PERTANYAAN</a>
        </div>
        @if (!is_null($io))
        <div class="flex justify-center items-center space-x-4 mb-5">
            <a href="{{ url('minat/' . $io->id . '/edit') }}"
                class="py-2.5 px-6 rounded-full outline outline-teal-200 hover:bg-teal-200 hover:text-white">EDIT
                PERTANYAAN</a>
            <form action="{{ url('minat/'.$io->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button
                    class="py-2.5 px-6 rounded-full outline outline-red-500 hover:bg-red-500 hover:text-white">DELETE
                    JAWABAN</button>
            </form>
        </div>
        <div class="bg-white shadow-md shadow-gray-400 p-3 rounded">
            <div class="text-title">
                <p class="text-xl text-gray-700">MINAT dan HARAPAN</p>
            </div>
            <div class="QnA indent-8 text-gray-500 text-sm">
                <p>1.) Apa yang anda sukai dari pekerjaan anda sekarang/terakhir? (kondisi,tugas-tugas dan sebagainya).
                    Jelaskan</p>
                <p class="answer1"><b>JAWAB:</b> {{ $io->answer1 }}</p>
                <p>2.) Apa yang anda tidak sukai dari pekerjaan anda sekarang/terakhir? (kondisi,tugas-tugas,dan
                    sebagainya). Jelaskan</p>
                <p class="answer2"><b>JAWAB:</b> {{ $io->answer2 }}</p>
                <p>3.) Apa yang anda capai, Jelaskan alasanya.</p>
                <p class="answer3"><b>JAWAB:</b> {{ $io->answer3 }}</p>
                <p>4.) Menurut anda, apa yang masih perlu dikembangkan lagi untuk mendukung pekerjaan anda?</p>
                <p class="answer4"><b>JAWAB:</b> {{ $io->answer4 }}</p>
            </div>
        </div>
        @else
        <div class="bg-white shadow-md shadow-gray-400 p-3 rounded">
            <div class="text-title">
                <p class="text-xl text-gray-700">MINAT dan HARAPAN</p>
            </div>
            <div class="QnA indent-8 text-gray-500 text-sm">
                <p>1.) Apa yang anda sukai dari pekerjaan anda sekarang/terakhir? (kondisi,tugas-tugas dan sebagainya).
                    Jelaskan</p>
                <p class="answer1"><b>JAWAB:</b></p>
                <p>2.) Apa yang anda tidak sukai dari pekerjaan anda sekarang/terakhir? (kondisi,tugas-tugas,dan
                    sebagainya). Jelaskan</p>
                <p class="answer2"><b>JAWAB:</b></p>
                <p>3.) Apa yang anda capai, Jelaskan alasanya.</p>
                <p class="answer3"><b>JAWAB:</b></p>
                <p>4.) Menurut anda, apa yang masih perlu dikembangkan lagi untuk mendukung pekerjaan anda?</p>
                <p class="answer4"><b>JAWAB:</b></p>
            </div>
        </div>
        @endif
    </div>
    <div class="mt-5 mb-10 w-full">
        <div class="button-answer-2 text-center mb-5">
            <a href="{{ URL('power/and/weak/create') }}"
                class="py-2.5 px-6 rounded-full outline outline-violet-700 hover:bg-violet-700 hover:text-white">JAWAB
                PERTANYAAN</a>
        </div>
        @if (!is_null($pw))
        <div class="flex justify-center items-center space-x-4 mb-5">
            <a href="{{ url('power/and/weak/' . $pw->id . '/edit') }}"
                class="py-2.5 px-6 rounded-full outline outline-teal-600 hover:bg-teal-600 hover:text-white">EDIT
                PERTANYAAN</a>
            <form action="{{ url('power/and/weak/'.$pw->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button
                    class="py-2.5 px-6 rounded-full outline outline-red-500 hover:bg-red-500 hover:text-white">DELETE
                    JAWABAN</button>
            </form>
        </div>
        <div class="flex justify-center">
            <div class="w-3/4 bg-white rounded shadow-md shadow-gray-400 p-2">
                <div class="text-tittle-2">
                    <p class="text-gray-700 text-xl">KEKUATAN dan KELEMAHAN</p>
                </div>
                <div class="QnA2 indent-8 text-sm text-gray-500">
                    <p>1.) Apa yang menjadi kekuatan diri/pribadi anda?</p>
                    <p><b>JAWAB:</b> {{ $pw->answer1 }}</p>
                    <p>2.) Apa yang menjadi kelemahan diri/pribadi anda?</p>
                    <p><b>JAWAB:</b> {{ $pw->answer2 }}</p>
                    <p>3.) Dari kekuatan dan kelemahan anda diatas, sebutkan hal apa yang paling menggambarkan diri anda
                    </p>
                    <p><b>JAWAB:</b> {{ $pw->answer3 }}</p>
                </div>
            </div>
        </div>
        @else
        <div class="flex justify-center">
            <div class="w-3/4 bg-white rounded shadow-md shadow-gray-400 p-2">
                <div class="text-tittle-2">
                    <p class="text-gray-700 text-xl">KEKUATAN dan KELEMAHAN</p>
                </div>
                <div class="QnA2 indent-8 text-sm text-gray-500">
                    <p>1.) Apa yang menjadi kekuatan diri/pribadi anda?</p>
                    <p><b>JAWAB:</b></p>
                    <p>2.) Apa yang menjadi kelemahan diri/pribadi anda?</p>
                    <p><b>JAWAB:</b></p>
                    <p>3.) Dari kekuatan dan kelemahan anda diatas, sebutkan hal apa yang paling menggambarkan diri anda
                    </p>
                    <p><b>JAWAB:</b></p>
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="mt-5 mb-10 w-full">
        <div class="button-create-salary text-center mb-5">
            <a href="{{ URL('salary/create') }}"
                class="py-2.5 px-6 rounded-full outline outline-gray-700 hover:bg-gray-700 hover:text-white">JAWAB
                PERTANYAAN</a>
        </div>
        @if (!is_null($salary))
        <div class="flex justify-center items-center space-x-4 mb-5">
            <a href="{{ url('salary/' . $salary->id . '/edit') }}"
                class="py-2.5 px-6 rounded-full outline outline-orange-900 hover:bg-orange-900 hover:text-white">EDIT
                PERTANYAAN</a>
            <form action="{{ url('salary/'.$salary->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button
                    class="py-2.5 px-6 rounded-full outline outline-red-500 hover:bg-red-500 hover:text-white">DELETE
                    JAWABAN</button>
            </form>
        </div>
        <div class="flex justify-center">
            <div class="w-2/3 shadow-md shadow-gray-400 bg-white p-2">
                <div class="text-title-3">
                    <p class="text-xl text-gray-700">GAJI YANG DIHARAPKAN: {{ $salary->salary }}</p>
                </div>
            </div>
        </div>
        @else
        <div class="flex justify-center">
            <div class="w-2/3 shadow-md shadow-gray-400 bg-white p-2">
                <div class="text-title-3">
                    <p class="text-xl text-gray-700">GAJI YANG DIHARAPKAN:</p>
                </div>
            </div>
        </div>
        @endif
        <div class="mt-5">
            <div class="statement ml-44 p-2">
                <div class="text-statement mb-5">
                    <p>Demikian, data pribadi ini saya buat sesuai dengan kondisi yang sesungguhnya</p>
                </div>
                <p>{{ auth()->user()->tmpt_tinggal }},tgl {{ auth()->user()->created_at->format('d F Y') }}</p>
                <div class="ttd-img mt-3">
                    <img src="{{ asset('/img/TTD.png') }}" class="w-64 h-40" alt="ttd logo">
                </div>
                <div class="name-of-ttd ml-14 w-28 border-b border-slate-500">
                    <p class="ml-2">{{ auth()->user()->username }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
