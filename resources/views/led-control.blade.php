<!-- resources/views/led-control.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LED Control</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>LED Control</h1>
    <button id="onButton">Turn On</button>
    <button id="offButton">Turn Off</button>

    <script>

        $(document).ready(function() {
            $('#onButton').click(function() {
                sendRequest('on');
            });

            $('#offButton').click(function() {
                sendRequest('off');
            });

            function sendRequest(status) {
            $.ajax({
                url: '/led-control',
                method: 'POST',
                data: {
                    status: status,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    alert(response.message);
                },
                error: function(xhr, status, error) {
                    console.error("Error details:", xhr.responseText);
                    alert('Error occurred: ' + error);
                }
            });
}
        });
    </script>
</body>
</html>
