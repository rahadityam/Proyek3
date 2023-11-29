<!-- resources/views/barang/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tenan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pujasera</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/barang">Daftar Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kasir">Kasir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tenan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <h1 class="my-4">Daftar Tenan</h1>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tenans as $tenan)
                <tr>
                    <td>{{ $tenan->KodeKasir }}</td>
                    <td>{{ $tenan->Nama }}</td>
                    <td>{{ $tenan->HP }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>
