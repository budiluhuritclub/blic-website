@extends('layouts.event')

@section('title')
    Budi Luhur IT Club
@endsection

@section('content')
    <div class="success-card">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <Strong>Successfuly Applied.</Strong>
                </div>
                <div class="card-body">
                    You are successfully Applied to join our club <strong>Budi Luhur Information Technology Club</strong>.
                    Let us inform you for the next information.
                </div>
            </div>
        </div>
    </div>

    <h6 class="text-center mt-5">
        <a href="{{ route('home') }}"><strong>Back to homepage >> </strong></a>
    </h6>
@endsection
