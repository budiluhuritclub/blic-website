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
                <li class="breadcrumb-item active">{{ $divisi->nama_division }}</li>
            </ol>
        </nav>

        <div class="card p-5">
            <div class="d-flex">
                <img src="" alt="" class="circle">
                <h3>{{ $divisi->nama_division }}</h3>
            </div>
            <p>{{ $divisi->deskripsi }}</p>
        </div>

        <div class="card p-5 mt-4">
            <div class="d-flex">
                <h6>Member division</h6>
            </div>
            <div class="table-responsive p-0 mt-4">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">
                                NIM
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="50%">
                                Name
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                width="80%">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($items as $item)
                            <tr>
                                <td class="ps-4">{{ $no++ }}</td>
                                <td class="ps-4">{{ $item->nim }}</td>
                                <td class="ps-4">{{ $item->user->name }}</td>
                                <td class="ps-4">{{ $item->user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
