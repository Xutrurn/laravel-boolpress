@extends('layouts.dashboard')

@section('content')
    <div>
        <a class="btn btn-primary mb-2" href="{{ route('post.create') }}">Crea un nuovo post</a>
    </div>
    
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <table class="table">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>User Id</th>
                <th>Content</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th colspan="3"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td><a class="btn btn-primary" href="{{ route('post.show', $post->id) }}">Views</a></td>
                    <td><a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('post.destroy',$post) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection