    @extends('Pembina.Components.layout')
    <title>Unggah Proposal Legalitas</title>

    @section('content')
        @extends('Pembina.Components.stepper')



        @php
            $states = [
                [
                    'state' => '1',
                ],
                [
                    'state' => 'Sampul Depan',
                ],
                [
                    'state' => 'Lampiran 1',
                ],
                [
                    'state' => 'Lampiran 2',
                ],
                [
                    'state' => 'Lampiran 3',
                ],
                [
                    'state' => 'Sampul Belakang',
                ],
            ];
        @endphp

        <div class="flex flex-col items-center justify-center my-8 ml-4 md:ml-16 lg:ml-36 mr-4">
            <div class="flex items-center bg-blue-500 text-white w-full md:w-9/12 h-20 shadow-lg">
                <p class="text-base md:text-lg font-bold ml-4">Daftar Proposal Legalitas</p>
            </div>
            <div class="bg-customWhite w-full md:w-9/12 shadow-md mt-2 border border-gray-500 overflow-x-auto">
                <div class="flex flex-row justify-between p-2 md:p-4">
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">#</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Sampul Depan</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Lampiran 1</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Lampiran 2</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Lampiran 3</p>
                    <p class="text-center w-1/8 md:w-auto text-xs md:text-sm mr-1">Sampul Belakang</p>
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

        <div class="flex justify-center mt-4 mb-12">
            <button
                class="w-48 bg-customWhite border-2 border-customBlue text-customBlack font-bold py-2 px-4 rounded mx-2 mr-12 transition duration-300 hover:border-blue-500">Revisi</button>
            <button
                class="w-48 bg-customWhite border-2 border-customBlue text-customBlack font-bold py-2 px-4 rounded mx-2 ml-12 transition duration-300 hover:border-blue-500">Setujui</button>
        </div>




        @include('Ormawa.Components.footer2')

    @endsection
