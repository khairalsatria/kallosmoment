<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
</head>
<body>
    <h1 class="h2">Daftar Kategori</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
            <th>Harga</th>
        </tr>
        @foreach($kategoris as $kategori)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kategori->kode_kategori }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
            <td>{{ $kategori->harga }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
