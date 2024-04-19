@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-primary py-5">MODIFICA IL TUO PROGETTO</h1>

    <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label text-primary">Nome del progetto</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name" value='{{old('name') ?? $project->name}}'>
            @error('name')
                <div class="invalid-feedback ">
                    {{$message}}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label text-primary">Descrizione</label>
            <textarea type="text" class="form-control  @error('description') is-invalid @enderror " id="description" name="description">{{old('description') ?? $project->description}}</textarea>
            @error('description')
                <div class="invalid-feedback ">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label text-primary">Immagine</label>
            <input type="text" class="form-control" id="image" name="image" value='{{old('image') ?? $project->image}}'>
        </div>


        <div class="mb-3">
            <label for="technologies" class="form-label text-primary">Tecnologie</label>
            <input type="text" class="form-control  @error('technologies') is-invalid @enderror " id="technologies" name="technologies" value='{{old('technologies') ?? $project->technologies}}'>
            @error('technologies')
                <div class="invalid-feedback ">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="link_GitHub" class="form-label text-primary">Link di GitHub</label>
            <input type="text" class="form-control  @error('link_GitHub') is-invalid @enderror " id="link_GitHub" name="link_GitHub" value='{{old('link_GitHub') ?? $project->link_GitHub}}'>
            @error('link_GitHub')
                <div class="invalid-feedback ">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-primary my-5">Salva</button>
            <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary my-5 mx-2">Torna al progetto</a>
        </div>

    </form>
</div> 
@endsection