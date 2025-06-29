@extends('layouts.master')

@section('content')
<div class="container d-flex justify-content-center mt-4">
  <div class="card shadow w-100" style="max-width: 700px;">
    <div class="card-body">
      <h3 class="text-center mb-4">Edit Data Mahasiswa</h3>

      @if(session('Suksess'))
      <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('Suksess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

      <script>
        setTimeout(function () {
          let alert = document.getElementById('success-alert');
          if (alert) {
            let bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
            bsAlert.close();
          }
        }, 3000);
      </script>
      @endif

      <form action="/Mahasiswa/{{ $Mahasiswa->id }}/Update" method="POST">
        @csrf
      <div class="form-group">
        <label for="nim" class="form-label">NIM</label>
        <input name="nim" type="text" class="form-control" value="{{ $Mahasiswa->nim }}">
      </div>

      <div class="form-group">
        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
        <input name="nama_lengkap" type="text" class="form-control" value="{{ $Mahasiswa->nama_lengkap }}">
      </div>

      <div class="form-group">
        <label for="jurusan">PILIH JURUSAN</label>
        <select name="jurusan" class="form-control" id="jurusan">
          <option value="" selected disabled>-- Pilih Jurusan --</option>
          <option value="S1 - Fisioterapi">S1 - Fisioterapi</option>
          <option value="D4 - Akupuntur dan Pengobatan Herbal">D4 - Akupuntur dan Pengobatan Herbal</option>
          <option value="S1 - Pendidikan Bahasa Arab">S1 - Pendidikan Bahasa Arab</option>
          <option value="S1 - Pendidikan Kepelatihan Olah Raga">S1 - Pendidikan Kepelatihan Olah Raga</option>
          <option value="D4 - Keperawatan Anestesiologi">D4 - Keperawatan Anestesiologi</option>
          <option value="D4 - Teknologi Radiologi Pencitraan">D4 - Teknologi Radiologi Pencitraan</option>
          <option value="S1 - Informatika">S1 - Informatika</option>
          <option value="S1 - Teknik Komputer">S1 - Teknik Komputer</option>
          <option value="S1 - Peternakan">S1 - Peternakan</option>
          <option value="D3 - Produksi Ternak">D3 - Produksi Ternak</option>
          <option value="S1 - Bisnis Digital">S1 - Bisnis Digital</option>
          <option value="S1 - Akutansi">S1 - Akutansi</option>
          <option value="S1 - Ilmu Komunikasi">S1 - Ilmu Komunikasi</option>
          <option value="D3 - Perhotelan">D3 - Perhotelan</option>
          <option value="S1 - Hukum Bisnis">S1 - Hukum Bisnis</option>
        </select>
      </div>

      <div class="form-group">
        <label for="fakultas">PILIH FAKULTAS</label>
        <select name="fakultas" class="form-control" id="fakultas">
          <option value="" selected disabled>-- Pilih Fakultas --</option>
          <option value="Kesehatan dan Pendidikan">Kesehatan dan Pendidikan</option>
          <option value="Sains dan Teknologi">Sains dan Teknologi</option>
          <option value="Komunikasi dan Bisnis">Komunikasi dan Bisnis</option>
        </select>
      </div>

      <div class="form-group">
        <label for="jenis_kelamin">PILIH JENIS KELAMIN</label>
        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
          <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>

      <div class="form-group">
        <label for="alamat" class="form-label">Alamat</label>
        <input name="alamat" type="text" class="form-control" value="{{ $Mahasiswa->alamat }}">
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="text" class="form-control" value="{{ $Mahasiswa->email }}">
      </div>

      <div class="form-group">
        <label for="angkatan" class="form-label">Angkatan</label>
        <input name="angkatan" type="text" class="form-control" value="{{ $Mahasiswa->angkatan }}">
      </div>

      <button type="submit" class="btn btn-outline-primary">Update</button>
    </form>
  </div>
</div>


@endsection