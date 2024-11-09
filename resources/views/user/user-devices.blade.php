@extends('user.user')
@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Devices</h4>
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
                    @foreach ($userdevices as $userdevice)
                    <tr>
                        <td>{{ $userdevice->id }}</td>
                        <td>{{ $userdevice->name }}</td>
                        <td>{{ $userdevice->token }}</td>
                        <td>{{ $userdevice->user_id }}</td>
                        <td>{{ implode(', ', $userdevice->variables) }}</td>
                        <td>{{ $userdevice->lat }}</td>
                        <td>{{ $userdevice->long }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
