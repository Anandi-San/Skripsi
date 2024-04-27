@extends('Ormawa.Components.layout')

@section('content')
<div class="ml-2 mr-2 sm:ml-36 mt-2 sm:mt-10">
    <div class="flex flex-row">
        <p class="font-bold text-xl pb-2 md:pb-4 text-customBlack">Update Kegiatan</p>
    </div>
    <div class="flex flex-col mr-2">
        <label for="nama-kegiatan" class="font-bold text-lg text-customBlack mb-2">Nama Kegiatan:</label>
        <select id="nama-kegiatan" name="nama-kegiatan" class="sm:w-1/2 border border-customBlack bg-white px-4 py-2 focus:outline-none focus:border-customBlue">
            <option value="kegiatan1">Kegiatan 1</option>
            <option value="kegiatan2">Kegiatan 2</option>
            <option value="kegiatan3">Kegiatan 3</option>
        </select>
    </div>
    <div class="flex flex-col sm:flex-row sm:space-x-10">
    <div class="flex flex-col mr-2 mt-4">
        <label for="jumlah-dana" class="font-bold text-lg text-customBlack mb-2">Jumlah Dana (Rp):</label>
        <input type="text" id="jumlah-dana" name="jumlah-dana" value="Rp. 20000000" class="sm:w-40 border border-gray-300 px-4 py-2 focus:outline-none focus:border-customBlue" readonly>
    </div>
    <div class="flex flex-row items-center mt-4 sm:mt-16">
        <input type="checkbox" id="kegiatan-berhasil" name="kegiatan-berhasil" class="mr-2 h-6 w-6">
        <label for="kegiatan-berhasil" class="text-customBlack">Kegiatan Berhasil</label>
        <input type="checkbox" id="kegiatan-tidak-berhasil" name="kegiatan-tidak-berhasil" class="ml-4 mr-2 h-6 w-6">
        <label for="kegiatan-tidak-berhasil" class="text-customBlack">Kegiatan Tidak Berhasil</label>
    </div>
    </div>
    <div class="flex flex-col h-1/2 mt-4 mr-2">
        <label for="dana-digunakan" class="font-bold text-lg text-customBlack mb-2">Dana yang Digunakan:</label>
        <input type="text" id="dana-digunakan" placeholder="Rp." name="dana-digunakan" class="sm:w-1/2 border border-gray-300 px-4 py-2 focus:outline-none focus:border-customBlue">
        <label for="catatan" class="mt-2 font-bold text-lg text-customBlack mb-2">Catatan:</label>
        <textarea id="catatan" placeholder="catatan" name="catatan" class="sm:w-1/2 h-60 sm:h-96 border border-gray-300 px-4 py-2 focus:outline-none focus:border-customBlue resize-y"></textarea>
    <div class="flex mt-4">
        <button class="sm:w-52 w-full bg-customBlue text-white font-bold py-2 px-4 rounded-lg ">Simpan</button>
    </div>
</div>

@include('Ormawa.Components.footer2')
@endsection
