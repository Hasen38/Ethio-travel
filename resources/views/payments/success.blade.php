<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
@vite('resources/app.css')
</head>
<body>
    <div class="container">
        <div class="mt-5 alert alert-success">
            <h1>Payment Successful!</h1>
            {{-- <h3>{{$booking->name}}</h3> --}}
            <p>Thank you for your payment. Your transaction has been completed successfully.</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Return to Home</a>
        </div>
    </div>
</body>
</html>
