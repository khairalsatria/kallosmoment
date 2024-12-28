<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kategori</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Kategori</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategoris as $kategori)
                <tr>
                    <td>{{ $kategori->kode_kategori }}</td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>{{ $kategori->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
    