@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Articles</h3>

        <a href="{{ route('articles.create') }}" class="btn btn-primary my-3">Add New</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @if($articles->isEmpty())
                   <tr>
                    <td colspan="4" class="text-center">
                        Articles is Empty
                    </td>
                   </tr>
                @endif

                @foreach ($articles as $article)
                     <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category->name }}</td>
                        <td>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-secondary">
                                Show
                            </a>
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-primary">
                                Edit</a>
                            <a href="javascipt:;" onclick="handleDelete('{{ $article->id }}')" class="btn btn-sm btn-danger">
                                Hapus</a>
                        </td>
                     </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection