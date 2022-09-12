@extends('layouts.event')

@section('title')
    Budi Luhur IT Club
@endsection

@section('content')
    <div class="success-card">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <Strong>Registered Success</Strong>
                </div>
                <div class="card-body">
                    You are successfully registered for <strong>DevCamp 01 | Introduction: Design UI/UX with Figma</strong>.
                    Let us inform you for the next information.
                </div>
            </div>
        </div>
    </div>

    <h6 class="text-center mt-5">
        <a href="{{ route('home') }}"><strong>Back to homepage >> </strong></a>
    </h6>
@endsection
