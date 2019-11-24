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
            @if($errors->any())
            @foreach($errors-> all() as $error)
            <div class="bkg-danger p-2">
                <h6 class="text-align-center text-light">{{ $error }}</h6>
            </div>
            @endforeach
            @endif
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="label">Category name:</label>
                    <input type="text" name="name" placeholder="category name" class="form-control">
                </div>
                <button type="submit" class="btn btn-success float-right">Add category</button>
            </form>
        </div>
    </div>
</div>
@endsection