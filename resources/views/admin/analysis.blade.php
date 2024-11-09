@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h1 class="text-center mb-5">Analytics</h1>
            <hr>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card bg-primary text-white shadow-lg rounded-lg">
                        <div class="card-body">
                            <h5 class="card-title text-center">Total Users</h5>
                            <p class="card-text fs-2 text-center">{{ $totalAllUser }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card bg-success text-white shadow-lg rounded-lg">
                        <div class="card-body">
                            <h5 class="card-title text-center">Total Admin Users</h5>
                            <p class="card-text fs-2 text-center">{{ $totalAdminUser }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card bg-warning text-dark shadow-lg rounded-lg">
                        <div class="card-body">
                            <h5 class="card-title text-center">Total Normal Users</h5>
                            <p class="card-text fs-2 text-center">{{ $totalUser }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card bg-danger text-white shadow-lg rounded-lg">
                        <div class="card-body">
                            <h5 class="card-title text-center">Total Devices</h5>
                            <p class="card-text fs-2 text-center">{{ $totalDevice }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
