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
                    <a href="#">Account</a>
                </li>
                <li class="breadcrumb-item active">Add new account</li>
            </ol>
        </nav>

        <div class="card p-5">
            <h4>Add new user account</h4>
            <form action="{{ route('account.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" placeholder="NIM"
                        aria-label="nim" name="nim">
                    @error('nim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                        aria-label="Name" name="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        aria-label="Email" name="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" name="password"
                            class="form-control form-control-user @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="password-comfirmation"
                            placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100 my-4 mb-2">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
