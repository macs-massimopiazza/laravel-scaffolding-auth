@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="fs-4 text-secondary my-4">
    Crea un post
  </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
              <div class="card-header"><a href="{{route('admin.dashboard')}}" class="btn btn-warning">Torna a dashboard</a> Nuovo post</div>
                <div class="card-body">

                  <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf 

                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo</label>
                      <input 
                        class="form-control" 
                        type="text" 
                        id="title"
                        name="title"
                        required
                      >
                    </div>

                    <div class="mb-3">
                      <label for="image" class="form-label">Carica Immagine</label>
                      <input 
                        class="form-control" 
                        type="file" 
                        id="image"
                        name="image"
                        required
                      >
                    </div>
            
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
