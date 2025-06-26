@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 md:px-8 py-12">
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
        
        {{-- Galeri Gambar Properti --}}
        <div class="overflow-x-auto whitespace-nowrap flex gap-4 p-4 border-b">
            @php
                $gallery = $property->gallery ?? [$property->image]; // fallback ke 1 gambar
            @endphp

            @foreach ($gallery as $img)
                @if($img && file_exists(public_path('images/' . $img)))
                    <img src="{{ asset('images/' . $img) }}" alt="Gambar Properti" class="h-60 rounded-lg object-cover shadow">
                @else
                    <div class="h-60 w-60 bg-gray-200 flex items-center justify-center rounded-lg text-gray-500">
                        Gambar tidak tersedia
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Informasi Properti --}}
        <div class="p-8 md:p-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-6">{{ $property->name }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-800 text-lg">
                <p><i class="fas fa-map-marker-alt mr-2 text-blue-700"></i><strong>Lokasi:</strong> {{ $property->location }}</p>
                <p><i class="fas fa-money-bill-wave mr-2 text-green-600"></i><strong>Harga:</strong> Rp {{ number_format($property->price_min, 0, ',', '.') }} – Rp {{ number_format($property->price_max, 0, ',', '.') }}</p>
                <p><i class="fas fa-bed mr-2 text-indigo-500"></i><strong>Kamar Tidur:</strong> {{ $property->bedrooms }}</p>
                <p><i class="fas fa-bath mr-2 text-pink-500"></i><strong>Kamar Mandi:</strong> {{ $property->bathrooms }}</p>
                <p><i class="fas fa-ruler-combined mr-2 text-purple-500"></i><strong>Luas:</strong> {{ $property->size }}</p>
                <p><i class="fas fa-tag mr-2 text-red-500"></i><strong>Status:</strong> <span class="font-semibold text-green-700">{{ $property->status }}</span></p>
            </div>

            @if($property->description)
                <div class="mt-10">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-2">📝 Deskripsi Properti</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $property->description }}</p>
                </div>
            @endif

            {{-- Tombol --}}
            <div class="mt-10 flex flex-col md:flex-row gap-4">
                <a href="https://wa.me/62xxxxxxxxxx" target="_blank" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-full shadow text-center">
                    Konsultasi via WhatsApp
                </a>
                <a href="{{ url('/') }}" class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-3 rounded-full shadow text-center">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
