@extends('layouts.app')

@section('content')

@if (sizeof($ingredients) > 0)
<ul>
@foreach ($ingredients as $ingredient)
    <li>ID: {{ $ingredient->id }}</li>
    <li><strong>Name: </strong>{{ $ingredient->name }}</li>
    <li><strong>Description: </strong>{{ $ingredient->description }}</li>
    <li><strong>Price: </strong>{{ $ingredient->price }}</li>
@endforeach
</ul>
@else
<h3>No Ingredients Yet</h3>
@endif

@endsection
