@extends('Kemahasiswaan.Components.layout')
<title>SK Legalitas</title>

@section('content')
    <div class="flex flex-col items-center justify-center my-8 ml-4 md:ml-16 lg:ml-4 mr-4">
        <div class="flex items-center bg-blue-500 text-white w-full md:w-full h-20 shadow-lg">
            <p class="text-base md:text-lg font-bold ml-4">Daftar Proposal Legalitas</p>
        </div>
        <div class="bg-customWhite w-full md:w-full shadow-md mt-2 border border-gray-500 overflow-x-auto">
            <div class="flex flex-row justify-between p-2 md:p-4">
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">#</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Nama Ormawa</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Nomor SK</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Tanggal Terbit</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Tangal Berlaku Mulai</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Tanggal Berlaku Selesai</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">SK Legalitas</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Status</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Operasi</p>
            </div>
        </div>
        <div class="bg-customWhite w-full md:w-full shadow-md border border-gray-500 overflow-x-auto">
            {{-- <div class="flex flex-row justify-between p-2 md:p-4"> --}}
                @foreach ($skLegalitas as $index => $legalitas)
                <div class="flex flex-row justify-between p-2 md:p-4">
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $index + 1 }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $legalitas->pengajuanLegalitas->ormawaPembina->ormawa->nama_ormawa }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $legalitas->nomor_SK }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $legalitas->tanggal_terbit }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $legalitas->tanggal_berlaku_mulai }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $legalitas->tanggal_berlaku_selesai }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{{ $legalitas->status }}</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">
                        <a href="{{ asset('storage/sk_legalitas' . $legalitas->sk_legalitas) }}" target="_blank">Unduh</a> |
                        <a href="{{ route('editSKlegalitas.create') }}">Tambah</a> | 
                        <a href="#">Hapus</a>
                    </p>
                </div>
            @endforeach
            {{-- </div> --}}
        </div>
    </div>

    @include('Ormawa.Components.footer2')
@endsection
