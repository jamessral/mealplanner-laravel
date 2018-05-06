@extends('layouts.app')

@section('content')

@if (sizeof($recipes) > 0)

<ul>
@foreach ($recipes as $recipe)
    <li>ID: {{ $recipe->id }}</li>
    <li><strong>Name: </strong>{{ $recipe->name }}</li>
    <li><strong>Description: </strong>{{ $recipe->description }}</li>
@endforeach
</ul>

@else
<h3>No Recipes Yet</h3>
@endif

@endsection
