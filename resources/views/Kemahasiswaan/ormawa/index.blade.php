@extends('Kemahasiswaan.Components.layout')
<title>Daftar Ormawa</title>

@php
    $states = [
        [
            'state' => '1',
        ],
        [
            'state' => 'Ouroboros',
        ],
        [
            'state' => 'Nur Fajri Azhar',
        ],
        [
            'state' => 'Lainnya',
        ],
        [
            'state' => 'Status',
        ],
        [
            'state' => 'Operasi',
        ],
    ];
@endphp

@section('content')
    <div class="flex flex-col items-center justify-center my-2 ml-4 md:ml-16 lg:ml-36 mr-4">
        <div class="items-start justify-start w-3/4 max-w-screen-lg mx-auto">
        <p class="text-base md:text-lg font-bold ml-4 text-customBlack">Daftar Ormawa</p>
        </div>
        <div class="flex items-center bg-blue-500 text-white w-full md:w-9/12 h-20 shadow-lg">
            <!-- Search box and add button container -->
            <div class="flex items-center w-full p-4">
                <!-- Search box container -->
                <div class="flex items-center w-20 bg-white rounded-lg px-4 py-2 relative h-10">
                    <!-- Search icon -->
                    <span class="absolute left-0 flex items-center justify-center w-10 h-10">
                        <i class="fas fa-search text-customBlack"></i>
                    </span>
                    <!-- Search input -->
                    <input
                        type="text"
                        placeholder="Search"
                        id="searchInput"
                        class="rounded-lg flex-grow px-2 py-2 pl-10 focus:outline-none focus:shadow-outline text-black"
                        oninput="handleSearch()"
                    />
                </div>
                
                
                <!-- Spacer between search box and add button -->
                <div class="flex-grow"></div>
                
                <!-- Add button container -->
                <div class="flex items-center w-36 bg-white rounded-lg px-4 py-2 cursor-pointer" onclick="handleAddButton()">
                    <!-- Plus icon -->
                    <i class="fas fa-plus text-customBlack mr-2"></i>
                    <!-- Add text -->
                    <span class="text-customBlack font-medium">Tambah</span>
                </div>
            </div>
        </div>
        
        {{-- // container hasil --}}
        <div id="searchResults" class=""></div>
        
        <div class="bg-customWhite w-full md:w-9/12 shadow-md border border-gray-500 overflow-x-auto">
            <div class="flex flex-row justify-between p-2 md:p-4">
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">#</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Nama Ormawa</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Pembina</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Lainnya</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Status</p>
                <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Operasi</p>
            </div>
        </div>
        <div class="bg-customWhite w-full md:w-9/12 shadow-md border border-gray-500 overflow-x-auto">
            <div class="flex flex-row justify-between p-2 md:p-4">
                @foreach ($states as $state)
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">{!! $state['state'] !!}</p>
                @endforeach
            </div>
        </div>
    </div>

    @include('Ormawa.Components.footer2')
@endsection
