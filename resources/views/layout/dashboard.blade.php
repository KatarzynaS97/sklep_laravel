<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> <!-- Dodaj styl dla admina -->
</head>
<body>
    <div class="admin-header">
        <h1>Admin Panel</h1>
        <nav>
            <ul>
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </nav>
    </div>

    <div class="admin-content">
        @yield('content') <!-- Miejsce na zawartość strony -->
    </div>

    <script src="{{ asset('js/admin.js') }}"></script> <!-- Dodaj skrypt dla admina -->
</body>
</html>
