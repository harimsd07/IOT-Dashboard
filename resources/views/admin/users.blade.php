@extends('layouts.admin')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <h4 class="text-center">Users</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <div class="flex space-x-2">
                                <a href="{{ url('user-edit/'.$user->id)}}" class="btn btn-sm btn-primary">
                                    <i class="material-icons">edit</i>Edit</a>
                                <button class="btn btn-sm btn-danger" onclick="confirmDelete('{{ url('user-delete/'.$user->id)}}')">
                                    <i class="material-icons">delete</i>Delete</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- JavaScript for handling the deletion and retrieving cookies -->
<script>
    // Function to get the value of a cookie by name

    const sessionId = @json($session_id);
    console.log('Session ID:', sessionId);


    function confirmDelete(url) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>
@endsection
