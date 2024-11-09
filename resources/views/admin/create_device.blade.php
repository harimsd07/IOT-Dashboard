
@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add user</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('new-device')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group">
                    <div class="col-sm-10">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                    <div class="form-group">
                    <div class="col-sm-10">
                        <label>Token</label>
                        <input type="text" class="form-control" name="token">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <label>User Id</label>
                        <input type="text" class="form-control" name="userId">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <label>Variables</label>
                        <input type="text" class="form-control" name="variables">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <label>Latitude</label>
                        <input type="text" class="form-control" name="latitude">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10">
                        <label>Longitude</label>
                        <input type="text" class="form-control" name="longitude">
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </form>
            </div>
    </div>
@endsection
