@extends('user.user')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Welcome, {{ Auth::user()->name }}!</h2>
                </div>
                <div class="card-body">
                    <p class="lead text-center">Explore and manage your IoT devices with ease.</p>
                    <hr>
                    <p class="text-center">Stay connected and in control.</p>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
