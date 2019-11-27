@extends('layouts.app')
@section('content')
<div class="content">
    <div class=" d-flex justify-content-end mb-2">
        <a href="{{ route('posts.create') }}" class="btn button-success col-md-2">Add a Post</a>
    </div>
    <div class="card">
        <div class="card-header" style="background:white">
            <h5 class="card-title">Posts</h5>
        </div>
        <div class="card-body">
            <div class="d-flex flex-wrap justify-content-center align-content-center my-4">
                @foreach($posts as $post)
                <div class="card my-1 mr-3" style="max-width: 18rem;">
                    <div class="card-header" style="background:white">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    </div>
                    <div class="body p-2">
                        <p>
                            {{$post->content}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection