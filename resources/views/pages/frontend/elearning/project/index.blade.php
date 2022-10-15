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
                <li class="breadcrumb-item active">Project</li>
            </ol>
        </nav>

        <div class="card p-5">
            <h3>My Project</h3>
            <p>Let's share your best work and get an IT job</p>
        </div>

        <div class="card p-5 mt-4">
            <div class="d-flex align-items-center">
                <h6 class="mb-0">Budi Luhur IT Project</h6>
                <a href="{{ route('project.create') }}" class="text-primary font-weight-bold text-xs mt-2 ms-auto">Add Project</a>
            </div>
            <div class="p-0 mt-4">

              @if(session()->has('success'))
                  <div class="alert alert-success alert-dismissible" role="alert">
                      {{ session()->get('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif

              <div class="row g-4 mb-5">
                @forelse ($my_projects as $my_project)
                  <div class="col col-md-4">
                    <a href="{{ route('project.edit', $my_project->slug) }}">
                      <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/', . $project->photo ?? '') ?? '' }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{ $my_project->name ?? '' }}</h5>
                          <h6 class="card-subtitle text-muted mb-2">{{ $my_project->category_project->name ?? '' }}</h6>
                          @if ($my_project->is_visible == 1)
                            <span class="badge bg-success">Visible</span>
                          @else
                            <span class="badge bg-danger">Hidden</span>
                          @endif
                        </div>
                      </div>
                    </a>
                  </div>
                @empty
                    {{-- not found center in row bootsrap 5--}}
                    <div class="col-12 d-flex justify-content-center">
                        <div class="text-center">
                            {{-- alert --}}
                            <div class="alert alert-info" role="alert">
                                <span class="text-center">You don't have any project yet</span>
                            </div>
                        </div>
                    </div>
                @endforelse
              </div>

              {{-- pagination --}}
              <div class="d-flex justify-content-center">
                {{ $my_projects->links('vendor.pagination.bootstrap-4') }}
              </div>

            </div>
        </div>
    </div>
@endsection
