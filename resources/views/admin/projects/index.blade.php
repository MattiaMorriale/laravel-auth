@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center ">
        <div class="w-100 py-5">
            <h1 class="py-5 text-primary">I MIE PROGETTI</h1>
        </div>

        <div class="d-flex flex-wrap gap-4">
            @foreach ($projects as $project)
                <div class="card" style="width: 18rem;">
                    <img src="{{$project->image}}" class="card-img-top" alt="@">
                    <div class="card-body">
                        <h5 class="card-title">{{$project->name}}</h5>
                        <p class="card-text">{{$project->description}}</p>
                        <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary">INFO</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-100 py-5">
            <a href="{{route('admin.projects.create')}}" class="btn btn-primary">AGGIUNGI UN NUOVO COMICS</a>
        </div>
    </div>

    
@endsection