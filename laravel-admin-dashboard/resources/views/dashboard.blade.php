<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @resources('css/app.css')
</head>
<body>
    <div class="sidebar">
        @include('partials.sidebar')
    </div>
    <div class="main-content">
        <header>
            @include('partials.header')
        </header>
        <main>
            <h1>Dashboard</h1>
            <div class="widgets">
                <div class="widget">
                    <h2>Widget 1</h2>
                    <p>Content for widget 1.</p>
                </div>
                <div class="widget">
                    <h2>Widget 2</h2>
                    <p>Content for widget 2.</p>
                </div>
                <div class="widget">
                    <h2>Widget 3</h2>
                    <p>Content for widget 3.</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>