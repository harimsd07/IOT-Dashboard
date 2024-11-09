
@extends('layouts.admin')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 text-center">Profile Update</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-user/'.$users->id) }}" method="POST" enctype="multipart/form-data" id="admin-profile-update">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" value="{{ $users->name }}" name="name">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" value="{{ $users->email }}" name="email">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success btn-block">Update</button>
                    </div>
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
        $("#admin-profile-update").submit(function(event){
            event.preventDefault();

            var form = $("#admin-profile-update")[0];
            var data = new FormData(form);
            var userId = "{{ $users->id }}"; // Use the ID of the user being updated
            var updateUrl = "{{ url('update-user') }}/" + userId;

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
