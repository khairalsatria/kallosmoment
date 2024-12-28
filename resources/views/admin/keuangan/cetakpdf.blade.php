<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Keuangan</title>
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
        .footer {
            margin-top: 30px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Laporan Data Keuangan</h1>

    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Pendapatan</th>
                <th>Pengeluaran</th>
                <th>Keterangan</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalSaldo = 0; // Inisialisasi saldo total
            @endphp
            @foreach ($keuangans as $keuangan)
                @php
                    // Hitung saldo berdasarkan pendapatan dan pengeluaran
                    $pendapatan = $keuangan->pendapatan ?? 0;
                    $pengeluaran = $keuangan->pengeluaran ?? 0;
                    $totalSaldo += $pendapatan - $pengeluaran; // Update saldo total
                @endphp
                <tr>
                    <td>{{ \Carbon\Carbon::parse($keuangan->tanggal)->format('d-m-Y') }}</td>
                    <td>{{ $keuangan->deskripsi }}</td>
                    <td>{{ $keuangan->kategori }}</td>
                    <td>{{ number_format($pendapatan, 2, ',', '.') }}</td>
                    <td>{{ number_format($pengeluaran, 2, ',', '.') }}</td>
                    <td>{{ $keuangan->keterangan }}</td>
                    <td>{{ number_format($totalSaldo, 2, ',', '.') }}</td> <!-- Tampilkan saldo kumulatif -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Sisa Saldo: {{ number_format($totalSaldo, 2, ',', '.') }}</p>
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i:s') }}</p>
    </div>

</body>
</html>
