@extends('Kemahasiswaan.Components.layout')
<title>Pengajuan Legalitas</title>

@section('content')
    <div class="flex flex-col items-center justify-center my-8 ml-4 md:ml-16 lg:ml-4 mr-4">
        <div class="flex items-center bg-blue-500 text-white w-full md:w-full h-20 shadow-lg">
            <p class="text-base md:text-lg font-bold ml-4">Daftar Proposal Legalitas</p>
        </div>
        <div class="bg-customWhite w-full md:w-full shadow-md mt-2 border border-gray-500 overflow-x-auto">
            <div class="flex flex-row justify-between p-2 md:p-4">
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">#</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Nama Ormawa</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">proposal legalitas</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">AD/ART</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Surat Permohonan</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Daftar nama kepengurusan</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Biodata Pembina</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Struktur organisasi</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Daftar sranasa prasarana</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">GBHK</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">LPJ kepengurusan</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Status</p>
            </div>
        </div>
        <div class="bg-customWhite w-full shadow-md border border-gray-500 overflow-x-auto">
    @foreach ($data as $index => $item)
        <div class="flex flex-row justify-between p-2 md:p-4 border-b border-gray-300">
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $index + 1 }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->ormawaPembina->ormawa->nama_ormawa }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->proposal_legalitas }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->ad_art }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->surat_permohonan }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->daftar_nama_kepengurusan }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->biodata_pembina }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->struktur_organisasi }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->daftar_sarana_prasarana }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->GBHK }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->LPJ_kepengurusan }}</p>
            <p class="text-center w-1/8 text-xs md:text-sm">{{ $item->status }}</p>
        </div>
    @endforeach
</div>

        </div>
    </div>

    @include('Ormawa.Components.footer2')
@endsection
