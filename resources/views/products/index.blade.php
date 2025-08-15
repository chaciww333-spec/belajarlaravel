@extends('layouts.app')

@section('content')
      <div class="container">
        <h3>Products</h3>

        <a href="{{ route('products.create') }} " class="btn btn-primary my-3">Add New</a>
        <table class="table table-stringped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Suppliers</th>
                    <th>Name</th>
                    <th>Images</th>
                    <th>Stock</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->suppliers_id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        @if ($item->images)
                        <img src="{{ asset('storage/images/'.$item->images) }}" alt="{{ $item->name }}" width=80>
                        @endif
                    </td>
                    <td>{{$item->stock}}</td>
                    <td>{{$item->unit}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->discount}}</td>
                    <td>{{$item->description}}</td>
                     <td>
                            <a href="{{ route('products.show', $item->id) }}" >Detail</a>
                            <a href="{{ route('products.edit', $item->id) }}">Edit</a>
                            <a href="javascript:;"
                          onclick="handleDelete('{{ $item->id }}')" class="text-danger">Delete</a>
                        </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
      </div>
@endsection

<form action="" id="form-delete" method="POST">
    @csrf
    @method('DELETE')
</form>

@push('scripts')   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function handleDelete(id){
            Swal.fire({
                title: "Apakah kamu yakin?",
                text: "Data yang dihapus tidak bisa dikembalikan.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc3545;",
                cancelButtonColor: "#adb5bd",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed){
                    var form = document.getElementById('form-delete');
                    form.setAttribute('action', '{{ url("/products") }}/' + id);
                    form.submit();
                }
            });
            
        }
    </script>
@endpush

