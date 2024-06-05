@extends('layouts.app')
@section('content')
<div class="index-content position-relative">
  <table class="table mh-100">
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
              <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="delete-form">
    
                <button class="btn btn-link link-danger">Elimina</button>
                @csrf
                @method('DELETE')
            
                <div class="modal">
                  <div class="modal-box">
                    <h3 class="text-center">Vuoi eliminare questo progetto?</h3>
                    <span class="link link-danger modal-yes">Si</span>
                    <span class="link link-success modal-no">No</span>
                  </div>
              </div>
                
              </form>
            </td>
    
          </tr>
            @endforeach
          
          </table>
        
</div>


@endsection