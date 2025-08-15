@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Tambah Suppliers</h3>
        <a href="{{ route('suppliers.index') }}" class="my-3">Kembali</a>
        <div class="row">
            <div calss="col-md-6">
                <div class="card card-body">
                    <form action="{{ route('suppliers.store') }}" method="POST">
                    @csrf
                    <div class="from-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" />
                    </div>
                     <div class="from-group mb-3">
                        <label for="addres">Addres</label>
                       <textarea name="addres" id="addres" class="form-control"></textarea>
                    </div>
                    <div class="from-group mb-3">
                        <label for="province">province</label>
                        <input type="text" name="province" id="province" class="form-control" />
                    </div>
                    <div class="from-group mb-3">
                        <label for="city">City</label>
                        <input type="text" name="city" id="city" class="form-control" />
                    </div>
                    <div class="from-group mb-3">
                        <label for="postcode">Postcode</label>
                        <input type="text" name="postcode" id="postcoed" class="form-control" />
                    </div>
                    <div class="from-group mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" />
                    </div>
                    <div class="from-group mb-3">
                        <label for="fax">Fax</label>
                        <input type="text" name="fax" id="fax" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
                </div>   
            </div>
        </div>
    </div>
@endsection