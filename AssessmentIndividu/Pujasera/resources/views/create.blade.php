<!-- resources/views/barang/tambahBarang.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Barang</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>

<h1>Tambah Data Barang</h1>

<form action="{{ route('barang.store') }}" method="POST">
    @csrf

    <label for="KodeBarang">Kode Barang:</label>
    <input type="text" name="KodeBarang" required>
    <br>

    <label for="NamaBarang">Nama Barang:</label>
    <input type="text" name="NamaBarang" required>
    <br>

    <label for="Satuan">Satuan:</label>
    <input type="text" name="Satuan" required>
    <br>

    <label for="HargaSatuan">Harga Satuan:</label>
    <input type="number" name="HargaSatuan" required>
    <br>

    <label for="Stok">Stok:</label>
    <input type="number" name="Stok" required>
    <br>

    <button type="submit">Tambah Data</button>
</form>

</body>
</html>
