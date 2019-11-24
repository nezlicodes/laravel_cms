@extends('layouts.app')

@section('content')
<div class="content">
    <div class=" d-flex justify-content-end mb-2">
        <a href="/categories/create" class="btn button-success col-md-2">Add a category</a>
    </div>
    <div class="card">
        <div class="card-header" style="background:white">
            <div class="row">
                <h5 class="card-title">Categories</h5>
            </div>
        </div>
    </div>
</div>
@endsection