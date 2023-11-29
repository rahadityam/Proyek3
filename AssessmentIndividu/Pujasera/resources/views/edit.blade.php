<!-- resources/views/barang/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Barang</title>
</head>
<body>

<h1>Edit Data Barang</h1>

<form action="{{ route('barang.update', ['id' => $barang->KodeBarang]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="KodeBarang">Kode Barang:</label>
    <input type="text" name="KodeBarang" value="{{ $barang->KodeBarang }}" required>
    <br>

    <label for="NamaBarang">Nama Barang:</label>
    <input type="text" name="NamaBarang" value="{{ $barang->NamaBarang }}" required>
    <br>

    <label for="Satuan">Satuan:</label>
    <input type="text" name="Satuan" value="{{ $barang->Satuan }}" required>
    <br>

    <label for="HargaSatuan">Harga Satuan:</label>
    <input type="number" name="HargaSatuan" value="{{ $barang->HargaSatuan }}" required>
    <br>

    <label for="Stok">Stok:</label>
    <input type="number" name="Stok" value="{{ $barang->Stok }}" required>
    <br>

    <button type="submit">Update Data</button>
</form>

</body>
</html>
