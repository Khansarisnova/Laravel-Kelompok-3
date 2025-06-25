@extends('layouts.master')

@section('content')

      @if(session('Suksess'))
      <div class="alert alert-success" role="alert">
        {{session('Suksess')}}
      </div>
      @endif
        <div class="text-center my-4">
    <h1>Data Mahasiswa</h1>
</div>

<div class="d-flex justify-content-center">
    <table class="table table-hover table-bordered text-center mx-auto" style="width: 90%;">
        <tr>
            <th>NIM</th>
            <th>NAMA LENGKAP</th>
            <th>JURUSAN</th>
            <th>FAKULTAS</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
            <th>EMAIL</th>
            <th>ANGKATAN</th>
            <th colspan="2">AKSI</th>
        </tr>
        @foreach($data_Mahasiswa as $Mahasiswa)
        <tr>
            <td>{{ $Mahasiswa->nim}}</td>
            <td>{{ $Mahasiswa->nama_lengkap }}</td>
            <td>{{ $Mahasiswa->Jurusan}}</td>
            <td>{{ $Mahasiswa->Fakultas}}</td>
            <td>{{ $Mahasiswa->jenis_kelamin}}</td>
            <td>{{ $Mahasiswa->alamat}}</td>
            <td>{{ $Mahasiswa->email }}</td>
            <td>{{ $Mahasiswa->angkatan }}</td>
            <td><a href="/Mahasiswa/{{ $Mahasiswa->id }}/Edit" class="btn btn-outline-primary btn-sm">Edit</a></td>
            <td><a href="/Mahasiswa/{{ $Mahasiswa->id }}/Delete" class="btn btn-outline-danger btn-sm" onclick="return confirm ('Yakin Mau Dihapus')">Delete</a></td>
        </tr>
        @endforeach
        <tr colspan=10>
          <td >
            <button type="button" class="btn btn-outline-success btn-sm " data-bs-toggle="modal" data-bs-target="#exampleModal">
              TAMBAH DATA
          </button>
          </td>
        </tr>
    </table>
</div>

<div class="ml-7">
  
</div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleMod
              alLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA MAHASISWA</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/Mahasiswa/create" method="POST">
                          {{ csrf_field() }}
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nim</label>
                              <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
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
                              <div class="mb-3">
                                <label for="fakultas" class="form-label">Fakultas</label>
                                <select name="fakultas" class="form-control" id="fakultas">
                                  <option value="" selected disabled>-- Pilih Fakultas --</option>
                                  <option value="Kesehatan dan Pendidikan">Kesehatan dan Pendidikan</option>
                                  <option value="Sains dan Teknologi">Sains dan Teknologi</option>
                                  <option value="Komunikasi dan Bisnis">Komunikasi dan Bisnis</option>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                  <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Angkatan</label>
                                <input name="angkatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-outline-success">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
@endsection