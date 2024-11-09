@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Welcome, {{ Auth::user()->role }}!</h2>
                </div>
                <div class="card-body">
                    @if(Auth::user()->role == 'admin')
                        <p class="lead text-center">Hello Admin! You have full control over the system. Manage your IoT devices efficiently.</p>
                    @else
                        <p class="lead text-center">Explore and manage your IoT devices with ease.</p>
                    @endif
                    <hr>
                    <p class="text-center">Stay connected and in control.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
