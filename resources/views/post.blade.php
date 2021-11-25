@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-primary mx-2 mb-2">Tambah</a>
                    </div>
                    <div class="list-group mb-2">
                      @foreach($posts as $post)
                      <div class="list-group-item list-group-item-action mb-2">
                        <div class="d-flex">
                            <div class="description w-100 mx-3">
                                <div class="d-flex w-100 justify-content-between">
                                  <a href="{{ route('post.show', $post->id) }}" class="text-decoration-none text-dark"><h5 class="mb-1">{{ $post->title }}</h5></a>
                                  <small class="d-flex">
                                    @can('edit-a-post')
                                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success mx-1">Edit</a>
                                    @endcan
                                    @can('delete-a-post')
                                        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger mx-1">Delete</button>
                                        </form>
                                    @endcan
                                  </small>
                                </div>
                                <small class="text-muted">{{ $post->body }}</small>        
                            </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
