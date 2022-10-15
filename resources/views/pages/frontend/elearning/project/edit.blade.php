@extends('layouts.elearning')

@section('title')
    Dashboard Elearning - Budi Luhur IT Club
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Project</a>
                </li>
                <li class="breadcrumb-item active">Edit project</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between align-items-center my-4">
            <h4 class="py-2 mb-0">Edit project</h4>
            <form action="{{ route('project.destroy', $project->slug) }}" method="POST" class="ms-auto">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger d-flex align-items-center" onclick="return confirm('Are you sure to delete this project?')"><i class='bx bxs-trash-alt me-1'></i> Delete Project</button>
            </form>
        </div>

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

            <form action="{{ route('project.update', $project->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="dropload dropload__dropped dropload__ready" style="background-image: url({{ Storage::url($project->photo) ?? '' }})">
                                        <div class="dropload-ready">
                                            <i class='bx bxs-cloud-upload'></i>
                                            <p class="header font-weight-normal">Drag &amp; Drop Image</p>
                                            <p class="info font-weight-light">(dimensi 1048x700px dan ukuran maksimal 2mb)</p>
                                        </div>
                                        <div class="dropload-drag">
                                            <p class="text-gray-300">Drop it, please ...</p>
                                        </div>
                                        <div class="dropload-drop">
                                            <a href="#" class="btn btn-danger btn-small btn-control" id="remove-preview"><i class='bx bxs-trash-alt'></i></a>
                                        </div>
                                        <label for="photo" class="stretched-link"></label>
                                        <input type="file" name="photo" id="photo" accept="image/*">
                                        <input type="hidden" name="ajax" value="1">
                                    </div>
                                    @error('photo')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="name">Nama Project</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name ?? '') }}" placeholder="Nama Project" autocomplete="off" required>
                                    @error('name')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Deskripsi Project</label>
                                    <textarea id="description" class="form-control" name="description" placeholder="Deskripsi Project" autocomplete="off" required>{{ old('description', $project->description ?? '') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="url_project">URL Project</label>
                                    <input type="url" id="url_project" name="url_project" value="{{ old('url_project', $project->url_project ?? '') }}" class="form-control" placeholder="URL Project" autocomplete="off" required>
                                    @error('url_project')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category_project_id" class="form-label">Category Project</label>
                                    <select id="category_project_id" name="category_project_id" class="form-select" required>
                                        <option value="" disabled selected>Select Category Project</option>

                                        @forelse ($category_projects as $id => $category_project_name)
                                            <option value="{{ $id }}" @selected(old('category_project_id', $project->category_project_id ?? '') == $id)>{{ $category_project_name }}</option>
                                        @empty
                                            {{-- not found --}}
                                        @endforelse

                                    </select>
                                    @error('category_project_id')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="is_visible" class="form-label">Visibilty</label>
                                    <select id="is_visible" name="is_visible" class="form-select" required>
                                        <option value="" disabled selected>Select Visibilty</option>
                                        <option value="1" @selected(old('is_visible', $project->is_visible ?? '') == "1")>Visible</option>
                                        <option value="0" @selected(old('is_visible', $project->is_visible ?? '') == "0")>Hidden</option>
                                    </select>
                                    @error('is_visible')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <a href="{{ route('project.index') }}" class="btn btn-outline-secondary" style="width: 100px">Cancel</a>
                                <button type="submit" class="btn btn-primary ms-2" style="width: 100px">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
@endsection

@push('end-style')
    <link href="{{ asset('/public/css/dragdrop.css') }}" rel="stylesheet" />
@endpush

@push('end-script')
    <script src="{{ asset('/public/js/dragdrop.js') }}"></script>
    <script src="{{ asset('/public/js/sweetalert2.all.min.js') }}"></script>

    <script>
        // drag drop
        $(function() {
            $(document).on("click", "#remove-preview", function(e) {
                e.preventDefault();
                $(".dropload").attr("style", "background-image:url()").removeClass("dropload__dropped").addClass("dropload__ready")
                $('#cover').val('');
            })
        })
    </script>
@endpush
