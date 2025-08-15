@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Tambah Products</h3>

        <a href="{{ route('products.index') }}" class="my-3">Kembali</a>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                        <label for="suppliers_id">Suppliers</label>
                        <select name="suppliers_id" id="suppliers_id" class="form-select">
                            <option value="">-- Pilih Suppliers --</option>
                            @foreach ($suppliers as $suppliers)
                                 <option value="{{ $suppliers->id }}">{{ $suppliers->name }}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control"/>
                        </div>

                        <div class="form-group mb-3">
                        <label for="images">Images</label>
                        <input type="file" name="images" id="images" class="form-control"/>
                        </div>

                        <div class="form-group mb-3">
                        <label for="stock">Stock</label>
                        <input type="text" name="stock" id="stock" class="form-control"/>
                        </div>

                        <div class="form-group mb-3">
                        <label for="unit">Unit</label>
                        <input type="text" name="unit" id="unit" class="form-control"/>
                        </div>

                        <div class="form-group mb-3">
                        <label for="price">price</label>
                        <input type="text" name="price" id="price" class="form-control"/>
                        </div>

                        <div class="form-group mb-3">
                        <label for="discount">Discount</label>
                        <input type="text" name="discount" id="discount" class="form-control"/>
                        </div>

                        <div class="form-group mb-3">
                        <label for="description">Description</label>
                       <textarea name="description" id="description" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection