@extends('Kemahasiswaan.Components.layout')
<title>Proposal Kegiatan</title>

@section('content')
    <div class="flex flex-col items-center justify-center my-8 ml-4 md:ml-16 lg:ml-4 mr-4">
        <div class="flex items-center bg-blue-500 text-white w-full md:w-full h-20 shadow-lg">
            <p class="text-base md:text-lg font-bold ml-4">Daftar Proposal Kegiatan</p>
        </div>
        
        <!-- Header tabel -->
        <div class="bg-customWhite w-full md:w-full shadow-md mt-2 border border-gray-500 overflow-x-auto">
            <div class="flex flex-row justify-between p-2 md:p-4">
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">#</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Nama Ormawa</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Sampul Depan</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Lampiran 1</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Lampiran 2</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Lampiran 3</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">SK Legalitas</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Lainnya</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Status</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Operasi</p>
            </div>
        </div>
        
        <div class="bg-customWhite w-full md:w-full shadow-md border border-gray-500 overflow-x-auto">
            @foreach ($data as $index => $item)
                <div class="flex flex-row justify-between p-2 md:p-4">
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $index + 1 }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $item->skLegalitas->pengajuanLegalitas->ormawaPembina->ormawa->nama_ormawa }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $item->sampul_depan }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $item->lampiran_1 }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $item->lampiran_2 }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $item->lampiran_3 }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{$item->sampul_belakang}}</p>
                    {{-- <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{$item->sampul_belakang}}</p> --}}
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $item->status }}</p>
                    {{-- <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $item->operasi }}</p> --}}
                </div>
            @endforeach
        </div>
    </div>

    @include('Ormawa.Components.footer2')
@endsection
