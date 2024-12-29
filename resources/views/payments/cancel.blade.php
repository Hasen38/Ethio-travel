<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Cancelled</title>
    @vite('resources/app.css')
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Payment Cancelled</h1>
            <p class="mb-4">Your payment has been cancelled. If you have any questions, please contact our support team.</p>
            <a href="{{ url('/') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Return to Home</a>
        </div>
    </div>
</body>
</html>
