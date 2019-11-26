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
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary mr-1">edit</a>
                        <button class="btn btn-danger" type="button" data-toggle=" modal" data-target="#staticBackdrop">delete</button>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>