@extends('Ormawa.Components.layout')

@section('content')
<div class="sm:ml-36 ml-4 sm:mt-8 mt-2 mb-12">
    <p class="font-bold text-[32px] pb-1 text-customBlack">Dashboard</p>

    <p class="font-bold text-xl pb-4 mt-2 text-customBlack">Pengajuan Legalitas</p>

    <div class="relative overflow-hidden rounded-2xl h-36 max-w-full mr-5 flex flex-col items-center justify-center">
        <img src="{{ asset('images/background.png') }}" alt="Gambar ITK" class="w-full h-full object-cover rounded-2xl">
        <div class="absolute inset-0 bg-white opacity-30"></div>
    </div>
    <p class="font-bold text-xl mt-4 text-customBlack">Status Pengajuan Legalitas</p>
{{-- <div class="flex flex-col sm:flex-row"> --}}
        @include('Ormawa.Components.stepper')
    {{-- <div class="flex flex-row space-x-0">
    <a href="{{ route('legalitas') }}" class="flex flex-row items-center bg-customWhite border border-gray-400 p-4 rounded-lg mr-7 sm:mr-12 mb-4 sm:mb-0 h-28 w-44">
        <i class="fas fa-envelope-open-text fa-3x mr-2 text-customBlack"></i>
        <p class="text-customBlack">Unggah Pengajuan Legalitas</p>
    </a>
    <a href="{{ route('waitingrevision') }}" class="flex flex-row items-center bg-customWhite border border-gray-400 p-4 rounded-lg mr-12 sm:mr\
    mb-4 sm:mb-0 h-28 w-44">
        <i class="fas fa-envelope-open-text fa-3x mr-2 text-customBlack"></i>
        <p class="text-customBlack">Lihat Revisi Pengajuan Legalitas</p>
    </a> 
    </div>
    <div class="flex flex-col sm:flex-row ml-0 sm:ml-12">
    <a href="{{ route('Sklegalitas') }}" class="flex flex-row items-center bg-customWhite border border-gray-400 p-4 rounded-lg  sm:mb-0 h-28 w-44">
        <i class="fa-solid fa-note-sticky fa-3x mr-2 text-customBlack"></i>
        <p class="text-customBlack">Lihat SK Legalitas</p>
    </a>
</div> --}}
{{-- </div> --}}
    <p class="font-bold text-lg mt-4 text-customBlack">Riwayat Pengajuan Legalitas</p>
    <div class="flex flex-col md:flex-row md:mt-2 mt-0 ">
        <div class="flex flex-row items-center">
            <div class="w-8 md:w-16">
            <i class="fa-solid fa-file-import md:text-6xl text-3xl text-customBlack"></i>
            </div>
            <div class="w-30 ml-2 flex flex-row justify-center items-center">
                <div class="w-48 md:w-60">
                <p class="text-base md:text-lg text-customBlack">Tanggal waktu <br> pengajuan legalitas</p>
                </div>
                <p class="ml-4 mr-4 md:text-5xl text-3xl font-extrabold text-customBlack">:</p>
                <p class=" md:text-2xl text-xl text-customBlack">12/01/2023</p>
            </div>
        </div>
            <div class="md:ml-28 ml-0 md:mt-0 mt-2 flex flex-row items-center">
            <div class="w-8 md:w-16 flex justify-center items-center">
            <i class="fa-solid fa-hourglass-half md:text-6xl text-3xl text-customBlack"></i>
            </div>
            <div class="w-30 ml-2 flex flex-row justify-center items-center">
                <div class="w-48 md:w-60">
                <p class="text-base md:text-lg text-customBlack">Lama waktu <br> pengajuan legalitas</p>
                </div>
                <p class="ml-4 mr-4 md:text-5xl text-3xl font-extrabold text-customBlack">:</p>
                <p class="text-xl md:text-2xl text-customBlack">12 day</p>
            </div>
        </div>
        </div>

    <p class="font-bold text-xl pb-4 text-customBlack mt-8">Proposal Kegiatan</p>
    <div class="relative overflow-hidden rounded-2xl h-36 max-w-full mr-5 flex flex-col items-center justify-center">
        <img src="{{ asset('images/background.png') }}" alt="Gambar ITK" class="w-full h-full object-cover rounded-2xl">
        <div class="absolute inset-0 bg-white opacity-30"></div>
    </div>
    <p class="font-bold text-xl mt-4 text-customBlack">Status Proposal Kegiatan</p>
    @include('Ormawa.Components.stepper')
    
    <p class="font-bold text-lg mt-4 text-customBlack">Riwayat Proposal Kegiatan</p>
    <div class="flex flex-col md:flex-row mt-0 md:mt-2 ">
        <div class="flex flex-row items-center">
            <div class="w-8 md:w-16">
            <i class="fa-solid fa-file-import md:text-6xl text-3xl text-customBlack"></i>
            </div>
            <div class=" ml-2 flex flex-row justify-center items-center">
                <div class="w-48 md:w-60">
                <p class="text-base md:text-lg text-customBlack">Tanggal waktu Pengajuan <br> Proposal Kegiatan</p>
                </div>
                <p class="ml-4 mr-4 md:text-5xl text-3xl font-extrabold text-customBlack">:</p>
                <p class=" md:text-2xl text-xl text-customBlack">12/01/2023</p>
            </div>
        </div>
            <div class="md:ml-28 ml-0 md:mt-0 mt-2 flex flex-row items-center">
            <div class="w-8 md:w-16 flex justify-center items-center">
            <i class="fa-solid fa-hourglass-half md:text-6xl text-3xl text-customBlack"></i>
            </div>
            <div class=" ml-2 flex flex-row justify-center items-center">
                <div class="w-48 md:w-60">
                <p class="text-base md:text-lg text-customBlack">Lama waktu Pengajuan <br> Proposal Kegiatan</p>
                </div>
                <p class="ml-4 mr-4 md:text-5xl text-3xl font-extrabold text-customBlack">:</p>
                <p class="text-xl md:text-2xl text-customBlack">12 day</p>
            </div>
        </div>
        </div>
    {{-- <div class="flex flex-row space-x-0">
        <a href='{{ route('proposalKegiatan')}}' class="flex flex-row items-center bg-customWhite border border-gray-400 p-4 rounded-lg mr-7 sm:mr-14 h-28 w-44">
            <i class="fa-solid fa-file-lines fa-3x mr-2 text-customBlack"></i>
            <p class="text-customBlack">Unggah Proposal Kegiatan</p>
        </a>
        <a href="{{ route('ListRevisiproposalKegiatan')}}" class="flex flex-row items-center bg-customWhite border border-gray-400 p-4 rounded-lg  h-28 w-44">
            <i class="fa-solid fa-file-lines fa-3x mr-2 text-customBlack"></i>
            <p class="text-customBlack">Lihat Revisi Proposal Kegiatan</p>
        </a>
    </div> --}}

    <p class="font-bold text-xl pb-4 text-customBlack mt-8">LPJ Kegiatan</p>
    <div class="relative overflow-hidden rounded-2xl h-36 max-w-full mr-5 flex flex-col items-center justify-center">
        <img src="{{ asset('images/background.png') }}" alt="Gambar ITK" class="w-full h-full object-cover rounded-2xl">
        <div class="absolute inset-0 bg-white opacity-30"></div>
    </div>
    <p class="font-bold text-xm pb-4 mt-4 text-customBlack">Status LPJ Kegiatan</p>
    @include('Ormawa.Components.stepper')
    <p class="font-bold text-lg mt-4 text-customBlack">Riwayat LPJ Kegiatan</p>
    <div class="flex flex-col md:flex-row mt-0 md:mt-2 ">
        <div class="flex flex-row items-center">
            <div class="w-8 md:w-16">
            <i class="fa-solid fa-file-import md:text-6xl text-3xl text-customBlack"></i>
            </div>
            <div class=" ml-2 flex flex-row justify-center items-center">
                <div class="w-48 md:w-60">
                <p class="text-base md:text-lg text-customBlack">Tanggal waktu Pengajuan <br> Proposal Kegiatan</p>
                </div>
                <p class="ml-4 mr-4 md:text-5xl text-3xl font-extrabold text-customBlack">:</p>
                <p class=" md:text-2xl text-xl text-customBlack">12/01/2023</p>
            </div>
        </div>
            <div class="md:ml-28 ml-0 md:mt-0 mt-2 flex flex-row items-center">
            <div class="w-8 md:w-16 flex justify-center items-center">
            <i class="fa-solid fa-hourglass-half md:text-6xl text-3xl text-customBlack"></i>
            </div>
            <div class=" ml-2 flex flex-row justify-center items-center">
                <div class="w-48 md:w-60">
                <p class="text-base md:text-lg text-customBlack">Lama waktu Pengajuan <br> Proposal Kegiatan</p>
                </div>
                <p class="ml-4 mr-4 md:text-5xl text-3xl font-extrabold text-customBlack">:</p>
                <p class="text-xl md:text-2xl text-customBlack">12 day</p>
            </div>
        </div>
        </div>
    {{-- <div class="flex mb-12">
        <a href="{{ route('LPJKegiatan')}}" class="flex flex-row items-center bg-customWhite border border-gray-400 p-4 rounded-lg mr-7 sm:mr-12 h-28 w-44">
            <i class="fa-solid fa-file-circle-exclamation fa-3x mr-2 text-customBlack"></i>
            <p class="text-customBlack">Unggah LPJ Kegiatan</p>
        </a>
        <a href="{{ route('ListRevisiLPJKegiatan')}}" class="flex flex-row items-center bg-customWhite border border-gray-400 p-4 rounded-lg h-28 w-44">
            <i class="fa-solid fa-file-circle-exclamation fa-3x mr-2 text-customBlack"></i>
            <p class="text-customBlack">Lihat Revisi LPJ Kegiatan</p>
        </a>
    </div> --}}
</div>
@include('Ormawa.Components.footer')
@endsection
