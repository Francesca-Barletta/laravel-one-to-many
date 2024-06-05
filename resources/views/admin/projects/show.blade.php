@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{ $project->progetto }}</h2>
        <p>Descrizione: {{ $project->descrizione }}</p>
        <p>Link: {{ $project->link }}</p>

    </div>
@endsection
