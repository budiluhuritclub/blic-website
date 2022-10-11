@extends('layouts.elearning')

@section('title')
    Security - Elearning Budi Luhur IT Club
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
                <li class="breadcrumb-item active">Security</li>
            </ol>
        </nav>

        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}"><i class="bx bx-user me-1"></i>
                    Profile</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('edit') }}"><i class="bx bx-edit me-1"></i>
                    Edit</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('security') }}"><i class="bx bx-shield-quarter me-1"></i>
                    Security</a>
            </li>
        </ul>

        <div class="card">
            <h5 class="card-header">Change Password</h5>
            <div class="card-body">
                <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                        <h6 class="alert-heading fw-bold mb-1">Are you sure you want to change your password?</h6>
                        <p class="mb-0">Once you change your password, there is no going back. Please be certain.</p>
                    </div>
                </div>
                <form id="form-security" method="POST" action="{{ route('changepassword') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="oldpassword" class="form-label">Old password</label>
                        <input class="form-control " type="password" id="oldpassword" name="oldpassword" autofocus
                            placeholder="type your current password" />
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="password" class="form-label">New password</label>
                        <input class="form-control" type="password" id="password" name="password" autofocus
                            placeholder="type your new password" />
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="password_confirmation" class="form-label">Re-type new password</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password"
                            name="password_confirmation" id="password-comfirnation" autocomplete="new-password"
                            placeholder="re-type the new password" />
                        <p style="color: red">{{ $errors->first('password') }}</p>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
