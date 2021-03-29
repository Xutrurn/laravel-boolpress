@extends('layouts.app')

@section('content')

<div class="container">
    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif
    <form action="{{ route('guest.contatti.sent') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="nomeUtente">Nome</label>
            <input type="text" class="form-control" id="nomeUtente" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="messaggioUtente">Messaggio</label>
            <textarea class="form-control" id="messaggioUtente" rows="3" name="message"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection