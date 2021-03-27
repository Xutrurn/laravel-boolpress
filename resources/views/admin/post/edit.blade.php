@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('post.update', $post) }}" method="post">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="content" id="body" cols="30" rows="10">{{ $post->content }}</textarea>
                </div>

                @foreach ($tags as $tag)
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tags[]" value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>
                        <label class="form-check-label" for="exampleCheck1">{{ $tag->name }}</label>
                    </div>
                @endforeach

                <div class="form-group">
                    <p>Seleziona i tag:</p>
                    <label for="tags">Tags</label>
                    <button class="btn btn-success" type="submit">Salva</button>
                </div>
            </form>
        </div>
    </div>

@endsection
                