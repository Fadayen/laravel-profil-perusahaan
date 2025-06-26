@extends('layouts.app')

@section('content')
  <h2>Daftar Rumah Dijual</h2>
  <div class="row">
    @foreach ($rumahList as $rumah)
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
          <img src="{{ $rumah['gambar'] }}" class="card-img-top" alt="Rumah {{ $rumah['nama'] }}">
          <div class="card-body">
            <h5 class="card-title">{{ $rumah['nama'] }}</h5>
            <p class="card-text">Lokasi: {{ $rumah['lokasi'] }}</p>
            <p class="card-text text-success fw-bold">Rp {{ number_format($rumah['harga'], 0, ',', '.') }}</p>
            <a href="{{ route('products.detail', $loop->index + 1) }}" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
