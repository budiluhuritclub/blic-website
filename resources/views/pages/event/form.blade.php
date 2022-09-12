@extends('layouts.onepage')

@section('title')
    Budi Luhur IT Club
@endsection

@section('content')
    <div class="banner-section">
        <div class="content-banner container rounded">
            <h1 class="white">DevCamp Registration</h1>
            <p>Introduction: Design UI/UX with Figma</p>
        </div>
    </div>

    @include('includes.alerts')

    <div class="form-section">
        <div class="container">
            <form action="{{ route('register-event-store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="number" class="form-control" id="nim" name="nim">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Handphone</label>
                    <input type="tel" class="form-control" id="no_telp" name="no_telp">
                </div>
                <div class="mb-3">
                    <label for="fakultas" class="form-label">Fakultas</label>
                    <select name="fakultas" id="fakultas" name="fakultas" class="form-control">
                        <option value="">Pilih fakultas</option>
                        <option value="FTI">Fakultas Teknologi Informasi</option>
                        <option value="FISIP">Fakultas Ilmu sosial dan ilmu politik</option>
                        <option value="FT">Fakultas Teknik</option>
                        <option value="FEB">Fakultas Ekonomi Bisnis</option>
                        <option value="FIKOM">Fakultas Ilmu Komunikasi</option>
                        <option value="AST">Akademi Sekretari</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
@endsection
