<!DOCTYPE html>
<html>
<head>
    <title>POS - Home</title>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Point of Sales</h1>
    <p>Aplikasi ini digunakan untuk membantu proses penjualan.</p>

    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/category/food-beverage') }}">Food & Beverage</a></li>
            <li><a href="{{ url('/category/beauty-health') }}">Beauty & Health</a></li>
            <li><a href="{{ url('/category/home-care') }}">Home Care</a></li>
            <li><a href="{{ url('/category/baby-kid') }}">Baby & Kid</a></li>
            <li><a href="{{ url('/user/1/name/Admin') }}">User Profile</a></li>
            <li><a href="{{ url('/sales') }}">Penjualan</a></li>
        </ul>
    </nav>
</body>
</html>
