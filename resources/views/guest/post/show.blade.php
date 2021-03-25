@extends('layouts.app')

@section('title','Dettaglio Post')


@section('content')
    <h1>Dettaglio del Post</h1>
    
    <div class="container">

        <div class="card mb-3">
            <div class="card-header">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post->content }}</p>
                <p>{{ $post->user->name }}</p>
            </div>
        </div>
    
    </div>
@endsection