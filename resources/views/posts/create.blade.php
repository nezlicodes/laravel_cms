@extends('layouts.app')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Create a new post!</h5>
        </div>
        <div class="card-body">
            @if($errors->any())
            @foreach($errors-> all() as $error)
            <div class="bkg-danger p-2">
                <h6 class="text-align-center text-light">{{ $error }}</h6>
            </div>
            @endforeach
            @endif

            <form action="{{route('posts.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title" class="label">Title:</label>
                    <input type="text" name="title" placeholder="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="dewscription" class="label">Description:</label>
                    <input type="text" name="description" placeholder="description" id="description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content" class="label">Content:</label>
                    <textarea type="text" name="content" placeholder="content" id="content" class="form-control"> </textarea>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image">
                    <label class="custom-file-label" for="image">Choose file...</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection