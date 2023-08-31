<!DOCTYPE html>
<html>
<head>
    <title>Form Input Produk</title>
</head>
<body>
    <h2>Input Produk</h2>
    <form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama Produk:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="harga">Harga Produk:</label>
        <input type="number" name="harga" id="harga" required>

        <label for="gambar">Gambar Produk:</label>
        <input type="file" name="gambar" id="gambar" required>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
