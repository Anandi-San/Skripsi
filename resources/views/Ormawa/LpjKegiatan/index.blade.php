@extends('Ormawa.Components.layout')
@include('Ormawa.Components.stepper')
<title>Daftar Kegiatan</title>

@section('content')
<div class="flex flex-col items-center justify-center my-8 ml-4 md:ml-16 lg:ml-36 mr-4">
    <div class="flex items-center bg-blue-500 text-white w-full md:w-9/12 h-20 shadow-lg">
        <p class="text-base md:text-lg font-bold ml-4">Daftar Kegiatan  </p>
    </div>
    <div class="bg-customWhite w-full md:w-9/12 shadow-md mt-2 border border-gray-500 overflow-x-auto">
        <div class="flex flex-row justify-between p-2 md:p-4">
            <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">#</p>
            <p class="text-center w-1/6 md:w-auto text-xs md:text-sm mr-1">Nama Kegiatan</p>
            <p class="text-center w-1/12 md:w-auto text-xs md:text-sm mr-1">Operasi</p>
        </div>
    </div>
    <div class="bg-customWhite w-full md:w-9/12 shadow-md border border-gray-500 overflow-x-auto">
        <div class="flex flex-row justify-between p-2 md:p-4">
            @foreach ($proposalKegiatan as $index => $proposal)
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $index + 1 }}</p>
                <p class="text-center w-1/12 md:w-auto text-xs md:text-sm mr-1">{{ $proposal->nama_kegiatan }}</p>
                <a href="{{ route('LPJKegiatan', ['id' => $proposal->id]) }}" class="text-center w-1/12 md:w-auto text-xs md:text-sm mr-1">
                    <button type="button" class="bg-customBlack hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full flex items-center">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah
                    </button>
                </a>
                
            @endforeach
        </div>
    </div>
</div>
    
@include('Ormawa.Components.footer2')
@endsection
