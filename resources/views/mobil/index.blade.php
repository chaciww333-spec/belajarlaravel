@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Mobil</h3>

        <a href="{{ route('mobil.create') }}" class="btn  btn-primary my-3">Add New</a>

        <table class="table table-striped">
        <thead>
            <tr>
                <th>Merek</th>
                <th>Tipe</th>
                <th>warna</th>
                <th>Jumlah Roda</th>
                <th>Nomor Mesin</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobil as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                     <td>{{$item->merek}}</td>
                    <td>{{$item->tipe}}</td>
                    <td>{{$item->warna}}</td>
                    <td>{{$item->jumlah_roda}}</td>
                    <td>{{$item->nomor_mesin}}</td>
                    <td>{{$item->gambar}}</td>
                     <td>
                        <a href="{{ route ('mobil.show', $item->id) }}">Detail</a>
                        <a href="{{ route ('mobil.edit', $item->id) }}">Edit</a>
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
                    form.setAttribute('action', '{{ url("/mobil") }}/' + id);
                    form.submit();
                }
            });
            
        }
    </script>
@endpush