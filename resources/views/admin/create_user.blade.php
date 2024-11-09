@extends('layouts.admin')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
<div class="card">
    <div class="row justify-content-center">
        <div class="card-header bg-primary text-white">
            <h4 class="text-center">Add User</h4>
        </div>
        <div class="card-body">
            <form id="admin-create-user">
                @csrf
                <div class="form-group  mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                    <span role="alert" class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group  mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                    <span role="alert" class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group  mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                    <span role="alert" class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group  mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control" id="role" name="role">
                    @error('role')
                    <span role="alert" class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Create User</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

<span id="output" class="btn btn-block"></span>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        padding: 20px;
    }

    .output-container {
        margin-top: 20px;
        padding: 10px;
        background-color: #007BFF;
        color: #ffffff;
        border-radius: 5px;
        text-align: center;
    }

    .output-container.success {
        background-color: #28a745;
    }

    .output-container.error {
        background-color: #dc3545;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $("#admin-create-user").submit(function(event){
            event.preventDefault();

            var form = $("#admin-create-user")[0];
            var data = new FormData(form);
            var updateUrl = "{{ url('/store-user') }}";

            $.ajax({
                type: "POST",
                url: updateUrl,
                data: data,
                processData: false,
                contentType: false,
                success: function(data){
                    $("#output").text(data.result).addClass('success output-container');
                    setTimeout(function() {
                        $("#output").fadeOut("slow", function() {
                            window.location.href = "/user";
                        });
                    }, 2000); // Fade out after 2 seconds
                },
                error: function(err){
                    $("#output").text(err.responseText).addClass('error output-container');
                     setTimeout(function() {
                        $("#output").fadeOut("slow");
                    }, 2000); // Fade out after 2 seconds
                }
            });
        });
    });
</script>
@endsection
