@extends('layouts.dashboard')

@section('content')
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>User Id</th>
                <th>Body</th>
                <th>Immagine</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user_id }}</td>
                <td>{{ $post->content }}</td>
                <td><img src="{{ asset('storage/'.$post->cover) }}" alt="{{ $post->title }}"></td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
        </tbody>
    </table>

@endsection
