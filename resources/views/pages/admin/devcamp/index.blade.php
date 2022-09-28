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
                <li class="breadcrumb-item active">Batch</li>
            </ol>
        </nav>

        <div class="card p-5">
            <h3>DevCamp - Intensive Bootcamp</h3>
            <p>Devcamp is an intensive bootcamp for student that wants to intensive learn with the expert</p>
        </div>

        <div class="card p-5 mt-4">
            <div class="d-flex">
                <h6>Batch of Devcamp</h6>
                <a href="{{ route('batch.create') }}" class="text-primary font-weight-bold text-xs mt-2 ms-auto">Add new
                    batch</a>
            </div>
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="10%">Batch
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width="80%">
                            Title
                            batch</th>
                        <th class="text-secondary opacity-7" width="10%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td class="ps-4">{{ $item->batch }}</td>
                            <td class="ps-4">{{ $item->title }}</td>
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
