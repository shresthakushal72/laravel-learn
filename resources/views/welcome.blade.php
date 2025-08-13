<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
        <!-- Use Laravel's compiled CSS -->
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="bg-red-200 font-extrabold">Hello</h1>
    <a href="{{ url('/home') }}">
        <button>Go to Home</button>
    </a>
</body>
</html>