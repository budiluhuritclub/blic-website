@extends('layouts.onepage')

@section('title')
    Budi Luhur IT Club
@endsection

@section('content')
    <div class="banner-section">
        <div class="content-banner container rounded">
            <h1 class="white">Budi Luhur Infomation Technology Club</h1>
            <p>Open Recruitment. Join us and let's grow together.</p>
        </div>
    </div>

    <div class="form-section">
        <div class="container">
            @include('includes.alerts')
            <form action="{{ route('applying-member') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="number" class="form-control" id="nim" name="nim" placeholder="masukan NIM anda"
                        value="{{ old('nim') }}">
                    <p style="color:red" class="mt-1">{{ $errors->first('nim') }}</p>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="masukan nama lengkap anda" value="{{ old('name') }}">
                    <p style="color:red" class="mt-1">{{ $errors->first('name') }}</p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="eg. example.mail@gmail.com" {{ old('email') }}>
                    <p style="color:red" class="mt-1">{{ $errors->first('email') }}</p>
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">No. Handphone</label>
                    <input type="number" class="form-control" id="phone_number" name="phone_number"
                        placeholder="masukan nomor handphone anda" value="{{ old('phone_number') }}">
                    <p style="color:red" class="mt-1">{{ $errors->first('phone_number') }}</p>
                </div>
                <div class="mb-3">
                    <label for="faculty" class="form-label">Fakultas</label>
                    <select name="faculty" id="faculty" name="faculty" class="form-control">
                        <option value="">Pilih fakultas</option>
                        <option value="FTI">Fakultas Teknologi Informasi</option>
                        <option value="FISIP">Fakultas Ilmu sosial dan ilmu politik</option>
                        <option value="FT">Fakultas Teknik</option>
                        <option value="FEB">Fakultas Ekonomi Bisnis</option>
                        <option value="FIKOM">Fakultas Ilmu Komunikasi</option>
                        <option value="AST">Akademi Sekretari</option>
                    </select>
                    <p style="color:red" class="mt-1">{{ $errors->first('faculty') }}</p>
                </div>
                <div class="mb-3">
                    <label for="major" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="major" name="major"
                        placeholder="masukan jurusan anda" value="{{ old('major') }}">
                    <p style="color:red" class="mt-1">{{ $errors->first('major') }}</p>
                </div>
                <div class="mb-3">
                    <label for="interest" class="form-label">Peminatan program studi</label>
                    <input type="text" class="form-control" id="interest" name="interest"
                        placeholder="eg. programming expert" value="{{ old('interest') }}">
                    <p style="color:red" class="mt-1">{{ $errors->first('interest') }}</p>
                </div>
                <div class="mb-3">
                    <label for="field_interest" class="form-label">Bidang teknologi yang anda minati</label>
                    <input type="text" class="form-control" id="field_interest" name="field_interest"
                        placeholder="eg. cyber security, web programming, mobile programming"
                        value="{{ old('field_interest') }}">
                    <p style="color:red" class="mt-1">{{ $errors->first('field_interest') }}</p>
                </div>
                <div class="mb-3">
                    <label for="reason" class="form-label">Alasan anda bergabung</label>
                    <textarea name="reason" id="reason" cols="30" rows="10" class="form-control"
                        placeholder="Jelaskan secara singkat alasan anda ingin bergabung">{{ old('reason') }}</textarea>
                    <p style="color:red" class="mt-1">{{ $errors->first('reason') }}</p>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
@endsection
