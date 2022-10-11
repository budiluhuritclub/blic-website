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
                <li class="breadcrumb-item active">Accounts</li>
            </ol>
        </nav>

        <div class="card p-5">
            <h3>User Account</h3>
            <p>All of members will be shown in here.</p>
        </div>

        <div class="card p-5 mt-4">
            <div class="d-flex">
                <h6>Registered Account</h6>
                <a href="{{ route('account.create') }}" class="text-primary font-weight-bold text-xs mt-2 ms-auto">Add new
                    user</a>
            </div>
            <div class="table-responsive p-0 mt-4">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">
                                No
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIM</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fakultas</th>
                            <th class="text-secondary opacity-7" width="10%"></th>
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
                                <td class="ps-4">{{ $item->name }}</td>
                                <td class="ps-4">{{ $item->email }}</td>
                                <td class="ps-4">{{ $item->fakultas }}</td>
                                <td class="align-middle">
                                    <a href="" class="text-secondary font-weight-bold text-xs ms-3" disabled
                                        data-toggle="tooltip" data-original-title="Detail user">
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
