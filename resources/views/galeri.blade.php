@extends('layouts.app')

@section('content')
<div class="bg-white rounded-xl shadow-md p-8">
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Galeri Wisata Religi</h1>
        <p class="text-gray-600">Dokumentasi perjalanan spiritual ke makam para Wali Songo.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        <!-- Gambar 1 -->
        <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300">
            <img src="{{ asset('images/makam_sunan_ampel.jpg') }}" alt="Makam Sunan Ampel" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-700">Makam Sunan Ampel</h3>
                <p class="text-sm text-gray-500">Surabaya, Jawa Timur</p>
            </div>
        </div>

        <!-- Gambar 2 -->
        <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300">
            <img src="{{ asset('images/maulana_sunan_gresik.jpg') }}" alt="Makam Sunan Gresik" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-700">Makam Sunan Gresik</h3>
                <p class="text-sm text-gray-500">Gresik, Jawa Timur</p>
            </div>
        </div>

        <!-- Gambar 3 -->
        <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300">
            <img src="{{ asset('images/makam_sunan_gunungjati.jpg') }}" alt="Makam Sunan Gunung Jati" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-700">Makam Sunan Gunung Jati</h3>
                <p class="text-sm text-gray-500">Cirebon, Jawa Barat</p>
            </div>
        </div>

        <!-- Gambar 4 -->
        <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300">
            <img src="{{ asset('images/makam_sunan_drajat.jpg') }}" alt="Makam Sunan Drajat" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-700">Makam Sunan Drajat</h3>
                <p class="text-sm text-gray-500">Lamongan, Jawa Timur</p>
            </div>
        </div>

        <!-- Gambar 5 -->
        <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300">
            <img src="{{ asset('images/makam_sunan_kudus.jpeg') }}" alt="Makam Sunan Kudus" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-700">Makam Sunan Kudus</h3>
                <p class="text-sm text-gray-500">Kudus, Jawa Tengah</p>
            </div>
        </div>

        <!-- Gambar 6 -->
        <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300">
            <img src="{{ asset('images/makam_sunan_kalijaga.jpeg') }}" alt="Makam Sunan Kalijogo" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-700">Makam Sunan Kalijogo</h3>
                <p class="text-sm text-gray-500">Demak, Jawa Tengah</p>
            </div>
        </div>

        <!-- Gambar 7 -->
        <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300">
            <img src="{{ asset('images/makam_sunan_muria.jpeg') }}" alt="Makam Sunan Muria" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-700">Makam Sunan Muria</h3>
                <p class="text-sm text-gray-500">Kudus, Jawa Tengah</p>
            </div>
        </div>

        <!-- Gambar 8 -->
        <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300">
            <img src="{{ asset('images/makam_sunan_bonang.jpg') }}" alt="Makam Sunan Bonang" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-700">Makam Sunan Bonang</h3>
                <p class="text-sm text-gray-500">Rembang, Jawa Tengah</p>
            </div>
        </div>

        <!-- Gambar 9 -->
        <div class="bg-gray-50 rounded-lg shadow hover:shadow-lg transition duration-300">
            <img src="{{ asset('images/makam_sunan_giri.jpg') }}" alt="Makam Sunan Giri" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-700">Makam Sunan Giri</h3>
                <p class="text-sm text-gray-500">Gresik, Jawa Timur</p>
            </div>
        </div>
    </div>
</div>
@endsection
