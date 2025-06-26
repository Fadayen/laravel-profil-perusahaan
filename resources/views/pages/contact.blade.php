@extends('layouts.app')

@section('content')
  <h2>Hubungi Kami</h2>
  <form>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
      <label for="pesan" class="form-label">Pesan</label>
      <textarea class="form-control" id="pesan" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
@endsection
