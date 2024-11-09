@extends('user.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center mb-0">User Profile</h2>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name:</label>
                        <div class="col-md-6">
                            <p id="name" class="mb-0">{{ $user->name }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                        <div class="col-md-6">
                            <p id="email" class="mb-0">{{ $user->email }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="device" class="col-md-4 col-form-label text-md-right">Device:</label>
                        <div class="col-md-6">
                            <p id="device" class="mb-0">{{ $userDevice }}</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('user-profile-edit', ['id' => Auth::user()->id]) }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
