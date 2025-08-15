@extends('layouts.app')

@section('content')
     <div class="container">
        <h3>Date Suppliers</h3>
        <a href="{{ route('suppliers.create') }}" class="btn btn-primary my-3">Tambah Suppliers</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Addres</th>
                    <th>province</th>
                    <th>City</th>
                    <th>PostCode</th>
                    <th>Phone</th>
                    <th>Fax</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $item)
                     <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->addres}}</td>
                        <td>{{$item->province}}</td>
                        <td>{{$item->city}}</td>
                        <td>{{$item->postcode}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->fax}}</td>
                        <td>
                            <a href="{{ route('suppliers.show', $item->id) }}" >Detail</a>
                            <a href="{{ route('suppliers.edit', $item->id) }}">Edit</a>
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
                    form.setAttribute('action', '{{ url("/suppliers") }}/' + id);
                    form.submit();
                }
            });
            
        }
    </script>
@endpush

