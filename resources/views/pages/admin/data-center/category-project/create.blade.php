@extends('layouts.app')

@section('title')
    Admin panel - Budi Luhur IT Club
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Category project</a>
                </li>
                <li class="breadcrumb-item active">Add new category project</li>
            </ol>
        </nav>

        <div class="card p-5">
            <h4>Add new category project</h4>

             @if($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <ul style="margin-bottom: 0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('category_project.store') }}" method="POST">
                @csrf
                <div class="form-group mt-3">
                    <div class="mb-3">
                        <label class="form-label" for="name">Category Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Category name"
                            name="name" value="{{ old('name') }}" autocomplete="off" required>
                            @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                    </div>
                    <div class="demo-inline-spacing">
                        <a href="{{ route('category_project.index') }}" class="btn btn-outline-secondary" style="width: 100px">Cancel</a>
                        <button class="btn btn-primary mt-3" type="submit" style="width: 100px">Save</button>
                      </div>
                </div>
            </form>
        </div>
    </div>
@endsection
