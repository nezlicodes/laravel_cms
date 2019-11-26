@extends('layouts.app')

@section('content')
<div class="content">
    <div class=" d-flex justify-content-end mb-2">
        <a href="{{ route('categories.create') }}" class="btn button-success col-md-2">Add a category</a>
    </div>
    <div class="card">
        <div class="card-header" style="background:white">
            <h5 class="card-title">Categories</h5>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($categories as $category)
                <li class="list-group-item"> {{ $category->name }}
                    <div class="d-flex justify-content-end align-content-center">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">edit</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection