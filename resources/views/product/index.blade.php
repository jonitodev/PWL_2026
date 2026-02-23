<!DOCTYPE html>
<html>
<head>
    <title>POS - Daftar Produk</title>
</head>
<body>
    <h1>Halaman Daftar Produk</h1>
    <p>Silakan pilih kategori produk:</p>

    <ul>
        <li><a href="{{ url('/category/food-beverage') }}">Food & Beverage</a></li>
        <li><a href="{{ url('/category/beauty-health') }}">Beauty & Health</a></li>
        <li><a href="{{ url('/category/home-care') }}">Home Care</a></li>
        <li><a href="{{ url('/category/baby-kid') }}">Baby & Kid</a></li>
    </ul>

    <a href="{{ url('/') }}">Kembali ke Home</a>
</body>
</html>
