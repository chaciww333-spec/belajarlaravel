@extends('layouts.app')

@section('content')
     <div class="container">
        <h3>Detail Suppliers</h3>

        <table class="table table-bordered table-stringped">
            <tr>
                <th widht=25%>Name</th>
                <th Widht=10px>:</th>
                <td>{{$suppliers->name}}</td>
            </tr>
             <tr>
                <th widht=25%>Addres</th>
                <th Widht=10px>:</th>
                <td>{{$suppliers->addres}}</td>
            </tr>
             <tr>
                <th widht=25%>Province</th>
                <th Widht=10px>:</th>
                <td>{{$suppliers->province}}</td>
            </tr>
             <tr>
                <th widht=25%>City</th>
                <th Widht=10px>:</th>
                <td>{{$suppliers->city}}</td>
            </tr>
             <tr>
                <th widht=25%>postcode</th>
                <th Widht=10px>:</th>
                <td>{{$suppliers->postcode}}</td>
            </tr>
             <tr>
                <th widht=25%>Phone</th>
                <th Widht=10px>:</th>
                <td>{{$suppliers->phone}}</td>
            </tr>
             <tr>
                <th widht=25%>Fax</th>
                <th Widht=10px>:</th>
                <td>{{$suppliers->fax}}</td>
            </tr>
             <tr>
                <th widht=25%>Dibuat Pada</th>
                <th Widht=10px>:</th>
                <td>{{Carbon\carbon::parse($suppliers->created_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
            </tr>
            <tr>
                <th widht=25%>Diperbarui Pada</th>
                <th Widht=10px>:</th>
                <td>{{Carbon\carbon::parse($suppliers->updated_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
            </tr>
        </table>
         <div class="mt-3">
        <a href="{{ route('mobil.index') }}">Kembali</a>
        Edit Hapus
    </div>
     </div>
@endsection