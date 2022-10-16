@extends('layouts.app')

@section('title')
    Admin panel - Budi Luhur IT Club
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Welcome back {{ Auth::user()->name }}! 🎉</h5>
                                <p class="mb-4">
                                    You are administrator of this website. You can manage anything as you want!
                                </p>

                                <a href="javascript:;" class="btn btn-sm btn-outline-primary">View
                                    Badges</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('/public/admin-template/assets/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png') }}"
                                    data-app-light-img="illustrations/man-with-laptop-light.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('/public/admin-template/assets/img/icons/unicons/chart-success.png') }}"
                                            alt="chart success" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Pengurus</span>
                                <h3 class="card-title mb-4">{{ $totalpengurus }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('/public/admin-template/assets/img/icons/unicons/wallet-info.png') }}"
                                            alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Anggota</span>
                                <h3 class="card-title mb-4">{{ $totalanggota }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- statistik -->
        <div class="row">
            <div class="col-lg-4 col-md-12 col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('/public/admin-template/assets/img/icons/unicons/chart-success.png') }}"
                                    alt="chart success" class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Web programming</span>
                        <h3 class="card-title mb-4">{{ $webprogramming }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('/public/admin-template/assets/img/icons/unicons/chart-success.png') }}"
                                    alt="chart success" class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Mobile programming</span>
                        <h3 class="card-title mb-4">{{ $mobileprogramming }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('/public/admin-template/assets/img/icons/unicons/chart-success.png') }}"
                                    alt="chart success" class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Cyber security</span>
                        <h3 class="card-title mb-4">{{ $cybersecurity }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('/public/admin-template/assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">User interface and experience</span>
                        <h3 class="card-title text-nowrap mb-4">{{ $uiux }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('/public/admin-template/assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Data mining</span>
                        <h3 class="card-title text-nowrap mb-4">{{ $datamining }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('/public/admin-template/assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Monsoon SIM [openclass]</span>
                        <h3 class="card-title text-nowrap mb-4">{{ $monsoonsim }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('/public/admin-template/assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Projects</span>
                        <h3 class="card-title text-nowrap mb-4">{{ number_format($projects) ?? 0 }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
