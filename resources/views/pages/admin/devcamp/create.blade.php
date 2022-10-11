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
                    <a href="#">Devcamp</a>
                </li>
                <li class="breadcrumb-item active">Add new batch</li>
            </ol>
        </nav>

        <div class="card p-5">
            <h4>Add new batch for Devcamp - Intensive Bootcamp</h4>
            <form action="{{ route('batch.store') }}" method="POST">
                @csrf
                <div class="form-group mt-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder=" Batch 0{{ $lastBatch }}" disabled>
                    </div>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Masukan tema devcamp untuk batch terbaru"
                            aria-label="title" id="title" name="title">
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
