@extends('layouts.frontend')

@section('title')
    Showcase - Budi Luhur IT Club
@endsection

@section('content')
    <div class="banner-section">
        <div class="content-banner container rounded text-center">
            <h1 class="white">Showcase</h1>
            <p>Here are some of our works</p>
        </div>
    </div>
    <div class="" style="padding-top: 100px">
        <div class="container mt-3 mb-3">
            <div class="row justify-content-center pt-2 pb-4">
                <div class="col-6">
                    <div class="mb-3">
                        <form action="{{ route('showcase.index') }}" method="GET">
                            <select id="defaultSelect" name="category" class="form-select form-select-lg" onchange="form.submit()">`
                            <option value="" selected>All Category</option>
                            @forelse ($category_projects as $slug => $category_project_name)
                                <option value="{{ $slug }}" {{ request('category') == $slug ? 'selected' : '' }}>{{ $category_project_name }}</option>
                            @empty
                                {{-- not found --}}
                            @endforelse
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">

                @forelse ($projects as $project)
                  <div class="col col-md-4">
                    <a href="{{ route('showcase.show', $project->slug) }}">
                      <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/' . $project->photo ?? '') ?? '' }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{ $project->name ?? '' }}</h5>
                          <h6 class="card-subtitle text-muted mb-2">{{ $project->user->name ?? '' }}</h6>
                          <span class="badge bg-info">{{ $project->category_project->name ?? '' }}</span>
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

              {{-- pagination --}}
              <div class="d-flex justify-content-center">
                {{ $projects->links('vendor.pagination.bootstrap-4') }}
              </div>
            </div>
        </div>
    </div>
@endsection
