@extends('Pembina.Components.layout')
<title>Pembina</title>

@section('content')
    <div class="mx-auto md:ml-36 md:mt-16 mt-8">
        <div class="mx-auto  md:mt-16 mt-8 flex justify-center"> <!-- Tambahkan class 'flex' dan 'justify-center' -->
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-40 h-40 md:w-auto md:h-auto rounded-full overflow-hidden">
                    <img class="object-center object-cover w-full h-full" src="/images/Ouroboros.png" alt="Ouroboros Technologies">
                </div>
                <div class="md:ml-4 mt-4 md:mt-0">
                    <p class="font-bold text-2xl text-customBlack">Ouroboros Technologies</p>
                    <p class="text-xl text-customBlack">Ouroboros</p>
                </div>
            </div>
            <!-- Pastikan konten yang lain tetap berada di luar wrapper flex -->
        </div>
        <hr class="w-full border-black my-4 mx-auto md:w-11/12">
        <div class="w-full md:w-11/12 mx-auto"> <!-- Menambahkan margin kiri pada tampilan desktop -->
            <p class="font-bold text-xl">Visi</p>
            <p class="text-customBlack">Visi Ouroboros Technologies adalah menjadikan ITK sebagai pusat pembelajaran serta
                pengembangan teknologi informasi dan komunikasi di Kota Balikpapan.</p>

            <p class="font-bold text-xl mt-4">Misi</p>
            <ol class="list-decimal pl-4">
                <li>Mewadahi mahasiswa ITK yang memiliki minat untuk belajar dan mengembangkan teknologi informasi dan
                    komunikasi.</li>
                <li>Membangun ekosistem pengembang teknologi informasi dan komunikasi di ITK.</li>
                <li>Meningkatkan kompetensi mahasiswa ITK di bidang teknologi informasi dan komunikasi agar siap untuk masuk
                    ke dalam dunia kerja.</li>
                <li>Menjadi pusat inovasi teknologi informasi dan komunikasi di Balikpapan.</li>
                <li>Menghasilkan mahasiswa berprestasi dan berbudi luhur di bidang teknologi informasi dan komunikasi untuk
                    berperan aktif dalam pelaksanaan misi ITK.</li>
            </ol>
        </div>

        <div class="flex flex-col md:flex-row justify-center md:space-x-48 mt-8">
            <div class="flex flex-col w-72 mb-8">
                <a href="#"
                    class="flex flex-col bg-customWhite border border-gray-400 p-2   rounded-lg w-full h-44 justify-center">
                    <i class="fa-solid fa-money-bill-1 fa-4x mr-2 mb-1 text-customBlue"></i>
                    <p class="text-xl text-customBlack mb-1 font-semibold">RP. 10.500.00</p>
                    <p class="text-customBlue">Saldo</p>
                </a>
                <a href="#"
                    class="flex flex-col bg-customWhite border border-gray-400 p-2 rounded-lg w-full h-44 justify-center mt-4">
                    <i class="fa-solid fa-arrow-up fa-4x mr-2 mb-1 text-customBlue "></i>
                    <p class="text-xl text-customBlack font-semibold mb-1">Rp. 2.500.00</p>
                    <p class="text-customBlue">Dana Terpakai</p>
                </a>
            </div>
            <div class="flex flex-col w-72 mb-8">
                <a href="#"
                    class="flex flex-col bg-customWhite border border-gray-400 p-2 rounded-lg w-full h-44 justify-center">
                    <i class="fa-solid fa-chart-line fa-4x mr-2 mb-1 text-customblue"></i>
                    <p class="text-customBlack text-xl font-semibold mb-1">4</p>
                    <p class="text-customBlue">Jumlah Kegiatan</p>
                </a>
                <a href="#"
                    class="flex flex-col bg-customWhite border border-gray-400 p-2 rounded-lg w-full h-44 justify-center mt-4">
                    <i class="fa-solid fa-chart-line fa-4x mr-2 mb-1 text-customblue"></i>
                    <p class="text-customBlack text-xl font-semibold mb-1">80</p>
                    <p class="text-customBlue">Jumlah Anggota</p>
                </a>
            </div>
        </div>
    </div>
    @include('Pembina.Components.footer')
@endsection
