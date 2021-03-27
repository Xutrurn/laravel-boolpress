@extends('layouts.dashboard')

@section('content')
    
    <div class="container">
        <div class="row">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('post.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="content" id="body" cols="30" rows="10">
                    </textarea>
                </div>


                @foreach ($tags as $tag)
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tags[]" value="{{ $tag->id }}">
                        <label class="form-check-label" for="exampleCheck1">{{ $tag->name }}</label>
                    </div>
                @endforeach

                <button class="btn btn-success" type="submit">Salva</button>
            </form>
        </div>
    </div>

@endsection