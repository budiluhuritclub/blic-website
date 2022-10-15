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
                <li class="breadcrumb-item active">Category Project</li>
            </ol>
        </nav>

        <div class="card p-5">
            <h3>Category project that we have</h3>
            <p>Every member can choose one of these category to make their project</p>
        </div>

        <div class="card p-5 mt-4">
            <div class="d-flex">
                <h6>Budi Luhur IT Category Project</h6>
                <a href="{{ route('category_project.create') }}" class="text-primary font-weight-bold text-xs mt-2 ms-auto">Add
                    Category Project</a>
            </div>
            <div class="table-responsive p-0 mt-4">

              @if(session()->has('success'))
                  <div class="alert alert-success alert-dismissible" role="alert">
                      {{ session()->get('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif

                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">
                                No
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="30%">
                                Nama Kategori Projek
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="30%">
                                Slug
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($category_projects as $category_project)
                            <tr>
                                <td class="ps-4">{{ $loop->iteration ?? 'N/A' }}</td>
                                <td class="ps-4">{{ $category_project->name ?? 'N/A' }}</td>
                                <td class="ps-4">{{ $category_project->slug ?? 'N/A' }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="dropdown">
                                            Action <i class='bx bx-chevron-down' ></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('category_project.edit', $category_project->id) }}"
                                                class="dropdown-item">
                                                Edit
                                            </a>
                                            <form action="{{ route('category_project.destroy', $category_project->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger"
                                                    onclick="return confirm('Are you sure you want to delete this data?');">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
