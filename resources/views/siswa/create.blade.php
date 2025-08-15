@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Siswa</h3>
    <a href="{{ route('siswa.index') }}" class="my-3">Kembali</a>

    <div class="row"></div>
    <div class="col-md-6">
        <div class="card card-body">
        <form action="{{  route('siswa.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nis">NIS</label>
                <input type="text" name="nis" id="nis" class="form-control"/>
            </div>
            <div class="form-group mb-3">
                <label for="nis">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control"/>
            </div>
            <div class="form-group mb-3">
                <label for="nis">Umur</label>
                <input type="text" name="umur" id="umur" class="form-control"/>
            </div>
            <div class="form-group mb-3">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="jenis kelamin">Jenis Kelamin</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input"
                        name="jenis_kelamin" id="jenis-kelamin_l"
                        value="L">
                        <label for="jenis_kelamin_l" class="form-check-label">Laki-Laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input"
                        name="jenis_kelamin" id="jenis-kelamin_p"
                        value="P">
                        <label for="jenis_kelamin_p" class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="tempat_lahir">Tempat_Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"/>
            </div> 
            <div class="form-group mb-3">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"/>
            </div>
            <div class="form-group mb-3">
                <label for="no_telp">Nomor Telepon</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control"/>
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</div>