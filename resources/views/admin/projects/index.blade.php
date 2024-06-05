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
          <th class="text-center">Link alla cartella git-hub</th>
          <th class="text-center">Tipologia</th>
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
            <td class="text-center"><a href="{{ $project->link }}" class="text-decoration-none btn btn-outline-info">Vai alla repo</a></td>
            <td class="text-center">{{ optional($project->type)->name }}</td>
            <td><a href="{{ route('admin.projects.show', $project) }}" class="text-decoration-none btn btn-outline-primary" target="_blank">Mostra</a></td>
            <td><a href="{{ route('admin.projects.edit', $project) }}"class="text-decoration-none btn btn-outline-success">Modifica</a></td>
            <td>
              <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="delete-form">
    
                <button type="button" class="btn btn-outline-danger">Elimina</button>
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