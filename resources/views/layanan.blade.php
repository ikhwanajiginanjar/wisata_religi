@extends('layouts.app')

@section('content')
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Layanan Kami</h1>
        <p class="text-gray-600">Berikut adalah beberapa layanan yang kami tawarkan untuk memanjakan pengalaman wisata religi Anda.</p>
    </div>

    <!-- Grid Layout untuk layanan -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($layanan as $item)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                <div class="relative">
                    <!-- Gambar Layanan (Thumbnail) -->
                    <img src="{{ asset('storage/galeri/' . $item->gambar) }}" alt="{{ $item->nama_layanan }}" class="w-full h-64 object-cover">
                    
                    <!-- Overlay untuk menambahkan teks di atas gambar -->
                    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-4">
                        <h3 class="text-xl font-semibold">{{ $item->nama_layanan }}</h3>
                        <p class="text-sm">{{ $item->deskripsi }}</p>
                    </div>
                </div>
                <div class="p-6">
                    <!-- Tombol untuk informasi lebih lanjut -->
                    <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold mt-4 inline-block">Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Kontak Informasi -->
    <div class="mt-12 bg-gray-50 p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Kontak Service</h2>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- PT. Azizah Jaya Abadi -->
            <div>
                <h3 class="text-xl font-semibold text-gray-700">PT. Ikhwan Jaya Abadi</h3>
                <div class="mt-4">
                    <h4 class="text-lg font-semibold text-gray-600">Telepon/WhatsApp</h4>
                    <ul class="list-none">
                        <li class="text-gray-600">Ikhwan Aji Ginanjar: <a href="tel:+6287828425768" class="text-blue-500 hover:text-blue-700">+62 877-7711-9196</a></li>
                    </ul>
                </div>
            </div>

            <!-- Qiandra Corp -->
            <div>
                <h3 class="text-xl font-semibold text-gray-700">Qiandra Corp</h3>
                <div class="mt-4">
                    <h4 class="text-lg font-semibold text-gray-600">Telepon/WhatsApp</h4>
                    <ul class="list-none">
                        <li class="text-gray-600">Yusuf: <a href="tel:+6281382632884" class="text-blue-500 hover:text-blue-700">+62 813-8263-2884</a></li>
                        <li class="text-gray-600">Januar: <a href="tel:+6281281807565" class="text-blue-500 hover:text-blue-700">+62 812-8180-7565</a></li>
                        <li class="text-gray-600">Nurul: <a href="tel:+6287719872056" class="text-blue-500 hover:text-blue-700">+62 877 1987 2056</a></li>
                        <li class="text-gray-600">Fiki: <a href="tel:+6287872883739" class="text-blue-500 hover:text-blue-700">+62 878 7288 3739</a></li>
                    </ul>
                </div>
            </div>

            <!-- Webmaster -->
            <div class="md:col-span-2 mt-8">
                <h3 class="text-xl font-semibold text-gray-700">Webmaster</h3>
                <div class="mt-4">
                    <h4 class="text-lg font-semibold text-gray-600">Email</h4>
                    <p class="text-gray-600"><a href="mailto:ikhwanajiginanjar@gmail.com" class="text-blue-500 hover:text-blue-700">ikhwanajiginanjar@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
