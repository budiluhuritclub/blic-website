@extends('layouts.app')

@section('title')
    Members Applicant - Budi Luhur IT Club
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card p-5">
            <h3>Applicant's member</h3>
            <p>Students that apply to join Budi Luhur IT Club</p>
        </div>

        <div class="card p-5 mt-4">
            <div class="d-flex">
                <h6>Applicants</h6>
                <a href="javascript;;" class="text-primary font-weight-bold text-xs mt-2 ms-auto">Add new
                    applicant</a>
            </div>
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="5%">No
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIM
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Fakultas
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Jurusan
                        </th>
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
                            <td class="ps-4">{{ $item->faculty }}</td>
                            <td class="ps-4">{{ $item->major }}</td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" disabled
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
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
@endsection