@extends('layouts.app')

@section('title')
    Admin panel - Budi Luhur IT Club
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card p-5 mt-5">
            <h3>DevCamp - Intensive Bootcamp</h3>
            <p>{{ $title->title }}</p>
            <div class="table-responsive p-0 mt-4">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Event</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIM</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Call
                                number</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Faculty
                            </th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td class="ps-4">{{ $item->no_batch }}</td>
                                <td class="ps-4">{{ $item->nim }}</td>
                                <td class="ps-4">{{ $item->nama }}</td>
                                <td class="ps-4">{{ $item->email }}</td>
                                <td class="ps-4">{{ $item->no_telp }}</td>
                                <td class="ps-4">{{ $item->fakultas }}</td>
                                <td class="align-middle">
                                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" disabled
                                        data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
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
