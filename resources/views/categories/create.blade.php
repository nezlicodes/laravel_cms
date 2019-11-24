@extends('layouts.app')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-header" style="background:white">
            <h5 class="card-title">
                Add Category:
            </h5>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="name" class="label">Category name:</label>
                    <input type="text" name="name" placeholder="category name" class="form-control">
                </div>
                <a href="{{ route('categories.store') }}" type="submit" class="btn btn-success float-right">Add category</a>
            </form>
        </div>
    </div>
</div>
@endsection