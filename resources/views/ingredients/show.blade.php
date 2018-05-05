@extends('layouts.app')

@section('content')
<h3>{{ $ingredient->name }}</h3>
<span><strong>Description:</strong> {{ $ingredient->description }}</span>
<span><strong>Price:<strong> {{ $ingredient->price }}</span>
@endsection
