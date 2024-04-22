
@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $p)
        
    <h4>{{ $p->title }}</h4>
    <p>{{ $p->excerpt }}</p>
        
    @endforeach
    
@endsection