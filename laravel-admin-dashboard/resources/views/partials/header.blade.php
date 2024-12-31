<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Header</title>
</head>
<body>
    <div class="header">
        <h1>Admin Dashboard</h1>
        <div class="user-info">
            <span>Welcome, {{ Auth::user()->name }}</span>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
</body>
</html>