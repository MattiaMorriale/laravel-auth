@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>ciao sono L'admin</h1>
    </div>

    <a href="{{route('admin.projects.index')}}">vai alla index</a>

@endsection