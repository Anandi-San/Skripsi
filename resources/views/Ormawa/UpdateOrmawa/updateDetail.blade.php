@extends('Ormawa.Components.layout')

@section('content')
<div class="sm:ml-36 ml-2 sm:mt-10 mt-2 ">
<div class=" flex flex-col">
    <div class="flex flex-col w-11/12 justify-start mx-auto">
    <p class="font-bold text-xl pb-2 md:pb-4 text-customBlack">Update Detail Data Ormawa</p>
    <p class="font-bold text-xl pb-4 text-customBlack">Poto Profil</p>
    </div>
    <div class="flex flex-row items-center justify-start mx-auto w-11/12">
        <div class="w-28 md:w-40 h-28 md:h-40 rounded-full bg-gray-300 mb-4 ">
            {{-- <img src="/images/Gambar orang.png" alt="Gambar Orang" class="absolute inset-0 w-full h-full object-cover rounded-full"> --}}
        </div>
        <div class="flex flex-col ml-4">
    <button class="bg-customBlue text-white w-52 font-bold py-2 px-4 mr-2 mb-2 rounded-lg">Unggah Gambar Baru</button>
    <button class="bg-customWhite text-Black w-52 border border-red-600 font-bold py-2 px-4 mt-2 rounded-lg">Hapus Gambar</button>
        </div>
    </div>
</div>

<div class="mt-4 flex flex-col md:flex-row h-auto md:h-14 w-11/12 mx-auto mb-8 space-x-0 md:space-x-10">
    <div class="flex flex-col md:w-1/2">
        <label for="nama-ormawa" class="font-bold text-xl pb-2 text-customBlack">Nama Ormawa</label>
        <input type="text" id="nama-ormawa" name="nama-ormawa" placeholder="Masukkan Nama Ormawa" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-customBlue">
    </div>
    <div class="flex flex-col md:w-1/2 mt-4 md:mt-0">
        <label for="singkatan" class="font-bold text-xl pb-2 pt-2 md:pt-0 text-customBlack">Singkatan</label>
        <input type="text" id="singkatan-ormawa" name="singkatan-ormawa" placeholder="Masukkan Singkatan" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-customBlue">    
    </div>
</div>





<div class="mt-4 flex flex-col h-96 mb-8 w-11/12 mx-auto">
    <label for="visi" class="font-bold text-xl pb-2 text-customBlack">Visi</label>
    <textarea id="visi" name="visi" placeholder="Masukkan Visi Ormawa" class="h-32 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-customBlue writing-mode-vertical resize-none"></textarea>
    <label for="misi" class="font-bold text-xl pb-2 pt-2 text-customBlack">Misi</label>
    <textarea id="misi" name="misi" placeholder="Masukkan Misi Ormawa" class="h-64 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-customBlue resize-none"></textarea>
</div>
    <div class="mt-4 flex flex-col  mb-8 w-11/12 mx-auto">
    <button class="sm:w-52 w-full bg-customBlue text-white font-bold py-2 px-4 rounded-lg">Simpan</button>
    </div>
</div>



@include('Ormawa.Components.footer')
@endsection