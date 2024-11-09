
@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4></h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-user/'.$users->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group">
                    <div class="col-sm-10">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{ $users->name }}" name="name">
                    </div>
                </div>
                    <div class="form-group">
                    <div class="col-sm-10">
                        <label>Email</label>
                        <input type="text" class="form-control" value="{{ $users->name }}" name="email">
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
                </div>
            </form>
            </div>
    </div>
@endsection
