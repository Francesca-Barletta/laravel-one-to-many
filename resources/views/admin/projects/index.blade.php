@extends('layouts.app')
@section('content')
<table class="table">
<thead>
    <tr>
      <th>ID</th>
      <th>Progetto</th>
      <th>Slug</th>
      <th>Descrizione</th>
      <th>Link alla cartella git-hub</th>
      <th>Tipologia</th>
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
        <td>{{ $project->slug }}</td>
        <td>{{ $project->descrizione }}</td>
        <td><a href="{{ $project->link }}">Link</a></td>
        <td>{{ optional($project->type)->name }}</td>
        <td><a href="{{ route('admin.projects.show', $project) }}">Mostra</a></td>
        <td><a href="{{ route('admin.projects.edit', $project) }}">Modifica</a></td>
        <td>
          <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="m-0">

            <button class="btn btn-link link-danger">Elimina</button>
            @csrf
            @method('DELETE')
          
          </form>
        </td>

      </tr>
        @endforeach

      </table>


@endsection