@extends('Kemahasiswaan.Components.layout')
<title>Daftar Ormawa</title>

@section('content')
    <div class="flex flex-col items-center justify-center my-2 ml-4 md:ml-16 lg:ml-36 mr-4">
        <div class="items-start justify-start w-full max-w-screen-lg">
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
                <p class="text-center w-1/8 text-xs md:text-sm mr-1">#</p>
                <p class="text-center w-1/16 text-xs md:text-sm mr-1">Nama Ormawa</p>
                <p class="text-center w-1/12 text-xs md:text-sm mr-1">Pembina</p>
                <p class="text-center w-1/12 text-xs md:text-sm mr-1">Lainnya</p>
                <p class="text-center w-1/12 text-xs md:text-sm mr-1">Status</p>
                <p class="text-center w-1/12 text-xs md:text-sm mr-1">Operasi</p>
            </div>
        </div>
        <div class="container bg-customWhite w-full md:w-9/12 ">
            @foreach ($ormawaList as $index => $ormawa)
                <!-- Kotak terpisah untuk setiap item ormawa -->
                <div class=" bg-customWhite w-full md:w-full shadow-md border border-gray-500 overflow-x-auto  p-4">
                    <div class="flex flex-row justify-between p-2">
                        <p class="text-center w-1/8 text-xs md:text-sm mr-1">{{ $index + 1 }}</p>
                        <p class="text-center w-1/12 text-xs md:text-sm mr-1">{{ $ormawa->nama_ormawa }}</p>
                        @foreach($ormawa->ormawaPembina as $pembina)
                            <p class="text-center w-1/8 text-xs md:text-sm mr-1">{{ $pembina->pembina->nama_pembina ?? 'pembina' }}</p>
                        @endforeach
                        <p class="text-center w-1/12 text-xs md:text-sm mr-1">{{ $ormawa->lainnya ?? 'Lainnya' }}</p>
                        <p class="text-center w-1/12 text-xs md:text-sm mr-1">{{ $ormawa->status ?? 'aktif' }}</p>
                        <p class="text-center w-1/12 text-xs md:text-lg mr-1">
                            <!-- Tautan untuk mengedit dengan ikon pensil -->
                            <a href="#" title="Edit" class="mr-2">
                                <i class="fas fa-users text-blue-500 ml-2"></i>
                            </a> |
                            <!-- Tautan untuk menghapus dengan ikon tong sampah -->
                            <a href="#" title="Delete">
                                <i class="fas fa-trash text-red-500 ml-2"></i>
                            </a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        
        

    @include('Ormawa.Components.footer2')
@endsection
