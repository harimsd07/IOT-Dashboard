@extends('user.user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h2>User Devices</h2>
                </div>
                <div class="card-body text-center">

                        <h4>No devices found for this user.</h4>
                        <p>It looks like you haven't added any devices yet.</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
