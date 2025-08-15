@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Detail Mobil</h3>

    <table class="table table-bordered table-stringped">
        <tr>
            <th widht=25%>Merek</th>
            <th widht=10px>:</th>
            <td>{{ $mobil->merek}}</td>
        </tr>
        <tr>
            <th widht=25%>Tipe</th>
            <th widht=10px>:</th>
            <td>{{ $mobil->tipe}}</td>
        </tr>
        <tr>
            <th widht=25%>Warna</th>
            <th widht=10px>:</th>
            <td>{{ $mobil->warna}}</td>
        </tr>
        <tr>
            <th widht=25%>Jumlah Roda</th>
            <th widht=10px>:</th>
            <td>{{ $mobil->jumlah_roda}}</td>
        </tr>
        <tr>
            <th widht=25%>Nomor Mesin</th>
            <th widht=10px>:</th>
            <td>{{ $mobil->nomor_mesin}}</td>
        </tr>
        <tr>
            <th widht=25%>Gambar</th>
            <th widht=10px>:</th>
            <td>{{ $mobil->gambar}}</td>
        </tr>
        <tr>
            <th widht=25%>Dibuat Pada</th>
            <th widht=10px>:</th>
            <td>{{ Carbon\carbon::parse($mobil->created_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
        </tr>
        <tr>
            <th widht=25%>Diperbarui Pada</th>
            <th widht=10px>:</th>
            <td>{{ Carbon\carbon::parse($mobil->update_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
        </tr>
    </table>
    <div class="mt-3">
        <a href="{{ route('mobil.index') }}">Kembali</a>
        Edit Hapus
    </div>
</div>
@endsection