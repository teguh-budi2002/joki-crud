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
    @if ($userPosts->count())
    @foreach ($userPosts as $post)
    <div class="button-edit flex space-x-4 items-center text-center mt-5">
        <a href="{{ url('dashboard/' . $post->nama . '/edit') }}"
            class="py-3 px-6 rounded-full bg-orange-500 hover:bg-orange-400 text-white">EDIT DATA DIRI</a>
        <form action="{{ URL('dashboard/' . $post->nama) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 hover:bg-red-400 py-2.5 px-6 rounded-full text-white"
                onclick="return(confirm('Yakin mau hapus data?'))">DELETE DATA?</button>
        </form>
    </div>
    <div class="bg-white w-2/3 h-auto p-2 shadow-xl mt-5 mb-3 rounded-b-lg flex justify-evenly">
        <div class="data-diri flex flex-col space-y-4 pr-5 border-r border-slate-400 h-full">
            <span>NAMA LENGKAP</span>
            <span>TEMPAT/TANGGAL LAHIR</span>
            <span>USIA</span>
            <span>JENIS KELAMIN</span>
            <span>SUKU BANGSA</span>
            <span>AGAMA</span>
            <span>ALAMAT</span>
            <span>STATUS PERNIKAHAN</span>
            <span>NO. TELP</span>
            <span>EMAIL</span>
            <span>HOBI</span>
        </div>
        <div class="value-data-diri flex flex-col space-y-4">
            <span>{{ $post->nama }}</span>
            <span>{{ $post->tempat_lahir }}/{{ $post->tanggal_lahir }}</span>
            <span>{{ $post->usia }}</span>
            <span>{{ $post->jenis_kelamin }}</span>
            <span>{{ $post->suku }}</span>
            <span>{{ $post->agama }}</span>
            <span>{{ $post->alamat }}</span>
            <span>{{ $post->status }}</span>
            <span>{{ $post->phone }}</span>
            <span>{{ $post->email }}</span>
            <span>{{ $post->hobi }}</span>
        </div>
    </div>
    @endforeach
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
    <div class="w-2/3 shadow-md shadow-gray-500 rounded-lg mb-24 mt-5">
        <div class="bg-gray-200 p-2 text-center">
            <span>DATA LINGKUNGAN KELUARGA</span>
        </div>
        <div class="bg-white w-full p-2 flex justify-evenly">
            <div class="data-diri flex flex-col space-y-4 pr-28 border-r border-slate-400 h-full">
                <span>NAMA AYAH</span>
                <span>NAMA IBU</span>
                <span>ANAK Ke-1</span>
                <span>ANAK Ke-1</span>
                <span>ANAK Ke-1</span>
                <span>ANAK Ke-1</span>
                <span>ANAK Ke-1</span>
                <span>ANAK Ke-1</span>
                <span>ANAK Ke-1</span>
            </div>
            <div class="value-data-diri flex flex-col space-y-4">
                <span>{{ $post->ayah }}</span>
                <span>{{ $post->ibu }}</span>
                <span>{{ $post->anak1 }}</span>
                <span>{{ $post->anak2 }}</span>
                <span>{{ $post->anak3 }}</span>
                <span>{{ $post->anak4 }}</span>
                <span>{{ $post->anak5 }}</span>
                <span>{{ $post->anak6 }}</span>
                <span>{{ $post->anak7 }}</span>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="bg-white w-3/4 p-2 mt-2 text-center rounded-md shadow-md shadow-gray-500">
        <span class="text-gray-500 text-xl">BELUM ADA DATA DIRI</span>
    </div>
    @endif
</div>
@endsection
