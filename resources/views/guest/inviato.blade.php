@extends('layouts.app')

@section('content')

<div class="container">
    @if(session('status'))
    <p>{{ session('status') }}</p>
    @endif
</div>

@endsection