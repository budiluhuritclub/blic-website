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
                    <a href="#">Division</a>
                </li>
                <li class="breadcrumb-item active">Add new division</li>
            </ol>
        </nav>

        <div class="card p-5">
            <h4>Add new division</h4>
            <form action="{{ route('save-new-division') }}" method="POST">
                @csrf
                <div class="form-group mt-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder=" Kode {{ $lastkode }}" disabled>
                    </div>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Division Name" aria-label="nama_division"
                            id="nama_division" name="nama_division">
                    </div>
                    <div class="input-group mt-3">
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"
                            placeholder="Describe about the division"></textarea>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
