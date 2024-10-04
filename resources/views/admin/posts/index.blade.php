@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="fs-4 text-secondary my-4">
    Tutti i post
  </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
              <div class="card-header"><a href="{{route('admin.dashboard')}}" class="btn btn-warning">Torna a dashboard</a> I postsss</div>
                <div class="card-body">
                  @if (session('success'))
                      <div class="alert alert-success">
                          {{ session('success') }}
                      </div>
                  @endif

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Immagine</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($posts as $post) 
                      <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td><img style="max-width: 200px" src="{{ asset('storage/' . $post->image) }}" alt=""></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
