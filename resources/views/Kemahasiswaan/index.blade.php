@extends('Kemahasiswaan.Components.layout')
<title>Kemahasiswaan</title>

@section('content')
    <p class="font-bold text-3xl text-customBlack mt-20">Halo, Kemahasiswaan</p>
    <p class="font-bold text-2xl pb-6 text-customBlack">Selamat datang di halaman dashboard Kemahasiswaa</p>

    <div class="flex justify-between mr-24 mb-28 mt-8">
        <a href="#" class="flex flex-row bg-customWhite border border-gray-400 p-2 rounded-lg h-44 w-96 items-center">
            <i class="fas fa-envelope-open-text fa-7x mb-2 mr-4 text-customBlue"></i>
            <div class="flex-col">
                <p class="text-7xl text-customBlack font-semibold mb-1">12</p>
                <p class="text-customBlack text-2xl">Daftar Pengajuan Legalitas</p>
            </div>
        </a>
        <div>
        <a href="#" class="flex flex-row bg-customWhite border border-gray-400 p-2 rounded-lg h-44 w-96 items-center">
        <i class="fa-solid fa-file-lines fa-7x mb-2 mr-4 text-customBlue"></i>
            <div class="flex-col">
                <p class="text-7xl text-customBlack font-semibold mb-1">4</p>
                <p class="text-customBlack text-2xl">Daftar Proposal Kegiatan</p>
            </div>
        </a>
        </div>
        <a href="#" class="flex flex-row bg-customWhite border border-gray-400 p-2 rounded-lg h-44 w-96 items-center">
            <i class="fa-solid fa-file-circle-exclamation fa-7x mb-2 mr-4 text-customBlue"></i>
            <div class="flex-col">
                <p class="text-7xl text-customBlack font-semibold mb-1">0</p>
                <p class="text-customBlack text-2xl">Daftar LPJ Kegiatan</p>
            </div>
        </a>
    </div>
    <div class="flex justify-center mr-32 space-x-48">
    <a href="#" class="flex flex-row bg-customWhite border border-gray-400 p-2 rounded-lg h-44 w-96 items-center">
        <i class="fa-solid fa-people-group fa-7x mb-2 mr-4 text-customBlue"></i>
        <div class="flex-col">
            <p class="text-7xl text-customBlack font-semibold mb-1">30</p>
            <p class="text-customBlack text-2xl">Daftar Ormawa</p>
        </div>
    </a>
    <a href="#" class="flex flex-row bg-customWhite border border-gray-400 p-2 rounded-lg h-44 w-96 items-center">
        <i class="fa-solid fa-person fa-7x mb-2 mr-4 text-customBlue"></i>
        <div class="flex-col">
        <p class="text-7xl text-customBlack font-semibold mb-1">30</p>
        <p class="text-customBlack text-2xl">Daftar Pembina</p>
        </div>
    </a>
</div>

@endsection
