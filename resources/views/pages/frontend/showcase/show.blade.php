@extends('layouts.frontend')

@section('title')
    Detail Showcase - Budi Luhur IT Club
@endsection

@section('content')
    <div class="banner-section">
        <div class="content-banner container rounded text-center">
            <h1 class="white">{{ $project->name ?? 'Unknown Project' }}</h1>
            <p>{{ $project->category_project->name ?? '' }}</p>
        </div>
    </div>
    <div class="" style="padding-top: 100px">
        <div class="container mt-3 mb-3">
            <div class="row">
                <div class="col-6">
                    <div class="card mb-4">
                        <div class="card-body">
                          <img src="{{ asset('/public/storage/' . $project->photo ?? '') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->user->name ?? '' }}</h5>
                            <a href="tel:{{ $project->user->no_telp ?? '' }}" class="text-muted mb-2 d-inline-block">{{ $project->user->no_telp ?? '' }}</a>
                            <p class="card-text">{{ $project->description ?? '' }}</p>
                            <a href="mailto:{{ $project->user->email ?? '' }}" class="btn btn-primary">Hire Now</a>
                            <a href="{{ $project->url_project ?? '' }}" target="_blank" rel="noopener noreferrer" class="btn btn-info">Visit Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
