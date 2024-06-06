@extends('layouts.app')
@section('content')
<table class="table">
<thead>
    <tr>
      <th>ID</th>
      <th>Progetto</th>
      <th>Descrizione</th>
      <th>Link alla cartella git-hub</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project)
      <tr>
        <th scope="row">{{ $project->id }}</th>
        <td>{{ $project->progetto }}</td>
        <td>{{ $project->descrizione }}</td>
        <td><a href="{{ $project->link }}">Link</a></td>
        
        <td><a href="{{ route('projects.show', $project) }}">Mostra</a></td>
       
    @endforeach

      </table>


@endsection