@extends('layouts.elearning')

@section('title')
    Choose Divison - Elearning Budi Luhur IT Club
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
                <li class="breadcrumb-item active">Choose Division</li>
            </ol>
        </nav>

        <div class="card p-5">
            <h4>Choose your division</h4>
            <p>
                <strong>Rules:</strong>
                <br>You only can take two division. You will be required to follow all the activities at the first division
                that you choose. But the second, you are not require to join all the activities. But in case you want to
                learn or
                training together with another member's from another division, just get join them then, no need to ask
                permission. <span style="color: red">Ask our spv for change your division.</span>
            </p>
            <form action="{{ route('division-store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="divisi" class="mt-3"><strong>First Division</strong></label>
                    <div class="input-group mt-3">
                        <select name="divisi" id="divisi" class="form-control" required>
                            <option value="">Choose your first division</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->kode }}">{{ $item->nama_division }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal"
                        data-bs-target="#modalToggle">
                        Save
                    </button>
                    <!-- Modal 1-->
                    <div class="modal fade" id="modalToggle" aria-labelledby="modalToggleLabel" tabindex="-1"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalToggleLabel">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure with your choice?
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
