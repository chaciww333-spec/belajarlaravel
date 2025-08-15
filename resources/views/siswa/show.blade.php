@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Detail Siswa</h3>

    <table class="table tabl-bordered table-stringped">
        <tr>
            <th widht=25%>NIS</th>
            <th widht=10px>:</th>
            <td>{{ $siswa->nis}}</td>
        </tr>
        <tr>
            <th widht=25%>Nama Siswa</th>
            <th widht=10px>:</th>
            <td>{{ $siswa->nama}}</td>
        </tr>
        <tr>
            <th widht=25%>Umur</th>
            <th widht=10px>:</th>
            <td>{{ $siswa->umur}}</td>
        </tr>
        <tr>
            <th widht=25%>Jenis Kelamin</th>
            <th widht=10px>:</th>
            <td>{{ $siswa->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
        </tr>
        <tr>
            <th widht=25%>Tempat, Tanggal Lahir</th>
            <th widht=10px>:</th>
            <td>{{ $siswa->tempat_lahir }},{{ Carbon\carbon::parse($siswa->tanggal_lahir)->isoFormat('DD MMM Y')}}</td>
        </tr>
        <tr>
            <th widht=25%>Alamat</th>
            <th widht=10px>:</th>
            <td>{{ $siswa->alamat}}</td>
        </tr>
        <tr>
            <th widht=25%>Nomor Telepon</th>
            <th widht=10px>:</th>
            <td>{{ $siswa->no_telp}}</td>
        </tr>
        <tr>
            <th widht=25%>Dibuat Pada</th>
            <th widht=10px>:</th>
            <td>{{ Carbon\carbon::parse($siswa->created_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
        </tr>
        <tr>
            <th widht=25%>Diperbarui Pada</th>
            <th widht=10px>:</th>
            <td>{{ Carbon\carbon::parse($siswa->update_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
        </tr>
    </table>
    <div class="mt-3">
        <a href="{{ route('siswa.index') }}">Kembali</a>
        Edit Hapus
    </div>
</div>
@endsection