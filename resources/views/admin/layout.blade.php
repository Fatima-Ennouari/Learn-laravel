<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    </nav>
    <hr>
    @yield('content')
    <hr>

<footer>© DevSkills</footer>


</body>
</html>