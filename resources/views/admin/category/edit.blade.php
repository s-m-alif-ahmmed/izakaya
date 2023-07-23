@extends('admin.master')

@section('title')
    Category Edit
@endsection

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Form Layouts</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
            </ol>
        </div>
    </div>

    <div class="row row-deck">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-center text-success">{{session('message')}}</p>
                    <form class="form-horizontal" method="POST" action="{{route('category.update', $category->id)}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" value="{{$category->name}}" placeholder="Enter your category name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Description</label>
                            <div class="col-md-9">
                                <textarea rows="3" class="form-control" name="description" placeholder="Enter your category description" type="text">{{$category->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="file" name="image" type="file">
                                <img src="{{asset($category->image)}}" alt="category image" height="100" width="100">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
