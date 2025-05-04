@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-blue-50 to-indigo-100 py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/ikhwan.jpg') }}" alt="Foto Ikhwan Aji Ginanjar"
                     class="w-40 h-40 rounded-full object-cover shadow-md mb-6 border-4 border-indigo-300">

                <h1 class="text-3xl font-bold text-gray-800 mb-2">Ikhwan Aji Ginanjar</h1>
                <p class="text-gray-600 text-lg mb-4">Mahasiswa STMIK WIDYA UTAMA Purwokerto</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6 text-left w-full">
                    <div>
                        <h2 class="text-sm font-semibold text-indigo-500 uppercase">NIM</h2>
                        <p class="text-gray-700 text-base">STI202203295</p>
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold text-indigo-500 uppercase">Asal Daerah</h2>
                        <p class="text-gray-700 text-base">Bengkulu Utara</p>
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold text-indigo-500 uppercase">Hobi</h2>
                        <p class="text-gray-700 text-base">Berenang</p>
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold text-indigo-500 uppercase">Aktivitas</h2>
                        <p class="text-gray-700 text-base">Aktif sebagai mahasiswa di STMIK WIDYA UTAMA Purwokerto</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
