@extends('layouts.app')
@section('title','Progetti | Francesca Barletta')
@section('content')
<div class="container-fluid index-content position-relative">
  {{-- <table class="table mh-100">
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
      <tbody> --}}
        <div class="row">
          @foreach ($projects as $project)
          <div class="col-3">
            <div class="col-3">
              <div class="card">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="image-cap">
                  <h3>{{ $project->progetto }}</h3>
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $project->progetto }}</h5>
                  <p class="card-text">{{ $project->descrizione }}</p>
                  <a href="{{ $project->link }}">Vai alla repo Git-hub</a>
                  <div class="card-buttons">
                    <p><a href="{{ route('projects.show', $project) }}" class="btn">Mostra</a></p>
                    @auth
                    <p><a href="{{ route('admin.projects.edit', $project) }}"class="text-decoration-none btn edit">Modifica</a></p>
                    @endauth
                    @auth
              
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="delete-form">
          
                      <button class="btn delete">Elimina</button>
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
                    @endauth
                  </div>
                
                </div>
              </div>       
          </div>
          {{-- <tr>
            <th scope="row">{{ $project->id }}</th>           
            <td>{{ $project->progetto }}</td>
            <td>{{ $project->slug }}</td>
            <td>{{ $project->descrizione }}</td>
            <td class="text-center"><a href="{{ $project->link }}" class="text-decoration-none btn btn-outline-info">Vai alla repo</a></td>
            <td class="text-center">{{ optional($project->type)->name }}</td>
            <td><a href="{{ route('admin.projects.show', $project) }}" class="text-decoration-none btn btn-outline-primary">Mostra</a></td> --}}
            
         
            {{-- </td>
    
          </tr> --}}
            @endforeach 
        </div>
       
          
          {{-- </table> --}}
        
</div>


@endsection