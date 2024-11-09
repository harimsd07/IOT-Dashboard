@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h4 class="text-center">Devices</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Token</th>
                        <th>User ID</th>
                        <th>Variables</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($devices as $device)
                    <tr>
                        <td>{{ $device->id }}</td>
                        <td>{{ $device->name }}</td>
                        <td>{{ $device->token }}</td>
                        <td>{{ $device->user_id }}</td>
                        <td>{{ implode(', ', $device->variables) }}</td>
                        <td>{{ $device->lat }}</td>
                        <td>{{ $device->long }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
