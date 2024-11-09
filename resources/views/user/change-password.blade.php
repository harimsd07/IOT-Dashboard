@extends('user.user')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Update Password</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('user-update-password', ['id' => $user->id]) }}" id="password-update">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="old_password">Old Password</label>
                    <input type="password" class="form-control" id="old_password" name="old_password" required>
                </div>

                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control" id="new_password" name="new_password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm New Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="new_password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    <i class="material-icons mr-2">lock</i>
                    Update Password
                </button>
            </form>
            
            
        </div>
    </div>
</div>


<span id="output" class="btn btn-block "></span>

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

    <script>
        $(document).ready(function(){
            $("#password-update").submit(function(event){
                event.preventDefault();

                var form =$("#password-update")[0];
                var data =new FormData(form);
                var userId = "{{ Auth::user()->id }}";

                $.ajax({
                    type:"POST",
                    url:"{{ route('user-update-password',['id' => Auth::user()->id]) }}",
                    data:data,
                    processData:false,
                    contentType:false,
                     success: function(data){
                        $("#output").text(data.result).addClass('success output-container');
                        setTimeout(function() {
                            $("#output").fadeOut("slow",function(){
                                window.location.href = "/user/profile/"+userId;
                            });
                        }, 2000); // Redirect after 2 seconds
                    },
                    error: function(err){
                        $("#output").text(err.responseText).addClass('error');
                        setTimeout(function() {
                        $("#output").fadeOut("slow");
                    }, 2000); // Fade out after 2 seconds
                    }
                });
            });
        });
    </script>
@endsection
