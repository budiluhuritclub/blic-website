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
                <li class="breadcrumb-item">
                    <a href="#">Detail</a>
                </li>
                <li class="breadcrumb-item active">{{ $item->name }}</li>
            </ol>
        </nav>

        <div class="card p-5 mt-5">
            <h4>{{ $item->name }}</h4>
            <p>{{ $item->level }} | Join at
                {{ Carbon\carbon::createFromTimeString($item->created_at)->format('d F Y') }}</p>
            <table class="table">
                <tbody>
                    <tr>
                        <th width="30%">NIM</th>
                        <td>{{ $item->nim }}</td>
                    </tr>
                    <tr>
                        <th width="30%">Email</th>
                        <td>{{ $item->email }}</td>
                    </tr>
                    <tr>
                        <th width="30%">No. Handphone</th>
                        <td>{{ $item->no_telp }}</td>
                    </tr>
                    <tr>
                        <th width="30%">Faculty</th>
                        <td>{{ $item->faculty }}</td>
                    </tr>
                    <tr>
                        <th width="30%">Major</th>
                        <td>{{ $item->major }}</td>
                    </tr>
                    <tr>
                        <th width="30%">address</th>
                        <td>{{ $item->address }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
