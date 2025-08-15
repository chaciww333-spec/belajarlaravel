@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Detail products</h3>

    <table class="table table-bordered table-stringped">
        <tr>
            <th widht=25%>Suppliers</th>
            <th widht=10px>:</th>
            <td>{{ $products->suppliers}}</td>
        </tr>
        <tr>
            <th widht=25%>Name</th>
            <th widht=10px>:</th>
            <td>{{ $products->name}}</td>
        </tr>
        <tr>
            <th widht=25%>Images</th>
            <th widht=10px>:</th>
             <td  colspan="2">
            <img src="{{ asset('storage/images/'.$products->images) }}" width="300">
            </td>
        </tr>
        <tr>
            <th widht=25%>Stock</th>
            <th widht=10px>:</th>
            <td>{{ $products->stock}}</td>
        </tr>
        <tr>
            <th widht=25%>Unit</th>
            <th widht=10px>:</th>
            <td>{{ $products->unit}}</td>
        </tr>
        <tr>
            <th widht=25%>price</th>
            <th widht=10px>:</th>
            <td>{{ $products->price}}</td>
        </tr>
         <tr>
            <th widht=25%>Discount</th>
            <th widht=10px>:</th>
            <td>{{ $products->discount}}</td>
        </tr>
         <tr>
            <th widht=25%>Description</th>
            <th widht=10px>:</th>
            <td>{{ $products->description}}</td>
        </tr>
        <tr>
            <th widht=25%>Dibuat Pada</th>
            <th widht=10px>:</th>
            <td>{{ Carbon\carbon::parse($products->created_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
        </tr>
        <tr>
            <th widht=25%>Diperbarui Pada</th>
            <th widht=10px>:</th>
            <td>{{ Carbon\carbon::parse($products->update_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
        </tr>
    </table>
    <div class="mt-3">
        <a href="{{ route('products.index') }}">Kembali</a>
        Edit Hapus
    </div>
</div>
@endsection