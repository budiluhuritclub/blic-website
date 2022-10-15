@extends('layouts.elearning')

@section('title')
    Profile - Elearning Budi Luhur IT Club
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Account</a>
                </li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>

        <div class="row">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('profile') }}"><i class="bx bx-user me-1"></i>
                        Profile</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('edit') }}"><i class="bx bx-edit me-1"></i>
                        Edit</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('security') }}"><i class="bx bx-shield-quarter me-1"></i>
                        Security</a>
                </li>
            </ul>

            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ asset('/public/images/default-profile.jpg') }}" alt="user-avatar" class="d-block rounded"
                            height="100" width="100" id="uploadedAvatar" />
                        <div>
                            <h3>{{ Auth::user()->name }}</h3>
                            @if ($totaldivision == 0 || $totaldivision == null)
                                <a href="{{ route('choose-division') }}">Choose your division</a>
                            @endif

                            @if ($totaldivision == 1)
                                <div class="division d-flex">
                                    @foreach ($items as $item)
                                        <strong class="me-3">[{{ $item->divisions->nama_division }}]</strong>
                                    @endforeach
                                    <a href="{{ route('choose-division') }}">Take new division</a>
                                </div>
                            @endif

                            @if ($totaldivision == 2)
                                <div class="division d-flex">
                                    @foreach ($items as $item)
                                        <strong class="me-3">[{{ $item->divisions->nama_division }}]</strong>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <!-- /Account -->
                    </div>
                    <hr class="my-0 mt-3 mb-3" />
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>: {{ Auth::user()->name }}</td>
                                <th>NIM</th>
                                <td>: {{ Auth::user()->nim }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>: {{ Auth::user()->email }}</td>
                                <th>Faculty</th>
                                <td>: {{ Auth::user()->faculty }}</td>
                            </tr>
                            <tr>
                                <th>Major</th>
                                <td>: {{ Auth::user()->major }}</td>
                                <th>Phone</th>
                                <td>: {{ Auth::user()->no_telp }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
