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
                <li class="breadcrumb-item active">Division</li>
            </ol>
        </nav>

        <div class="card p-5">
            <h3>Division that we have</h3>
            <p>Every member is seperated with division for they learn from.</p>
        </div>

        <div class="card p-5 mt-4">
            <div class="d-flex">
                <h6>Budi Luhur IT Club Division</h6>
                <a href="{{ route('create-new-division') }}" class="text-primary font-weight-bold text-xs mt-2 ms-auto">Add
                    new
                    Division</a>
            </div>
            <div class="table-responsive p-0 mt-4">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">
                                Kode Divisi
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="30%">
                                Nama Divisi
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                width="80%">Deskripsi</th>
                            <th class="text-secondary opacity-7" width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td class="ps-4">{{ $item->id }}</td>
                                <td class="ps-4">{{ $item->nama_division }}</td>
                                <td class="ps-4">{{ $item->deskripsi }}</td>
                                <td class="align-middle">
                                    <a href="{{ route('devcamp.show', $item->id) }}"
                                        class="text-secondary font-weight-bold text-xs ms-3" disabled data-toggle="tooltip"
                                        data-original-title="Edit user">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
