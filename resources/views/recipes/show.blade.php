@extends('layouts.app')

@section('content')
<h3>{{ $recipe->name }}</h3>
<span><strong>Description:</strong> {{ $recipe->description }}</span>
@endsection

