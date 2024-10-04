@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Dashboard
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">La mia dashboard</div>

                <div class="card-body">

                    <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Tutti i post</a>
                    <a href="{{route('admin.posts.create')}}" class="btn btn-success">✚ Crea post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
