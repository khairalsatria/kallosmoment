<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Pemesanan</title>
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

    <h1>Laporan Data Pemesanan</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                {{-- <th>Email</th>
                <th>Telepon</th> --}}
                <th>Paket</th>
                <th>Harga</th>
                <th>DP</th>
                <th>Tanggal</th>
                <th>Alamat</th>
                {{-- <th>Bukti</th> --}}
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pemesanans as $index => $pemesanan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pemesanan->nama }}</td>
                    {{-- <td>{{ $pemesanan->email }}</td>
                    <td>{{ $pemesanan->nohp }}</td> --}}
                    <td>{{ $pemesanan->nama_kategori }}</td>
                    <td>Rp. {{ number_format($pemesanan->harga, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($pemesanan->harga * 0.5, 0, ',', '.') }}</td>
                    <td>{{ \Carbon\Carbon::parse($pemesanan->tanggal_event)->format('d-m-Y') }}</td>
                    <td>{{ $pemesanan->alamat_event }}</td>
                    {{-- <td class="text-nowrap">
                        @if($pemesanan->bukti_pembayaran)
                            <a href="{{ asset('storage/' . $pemesanan->bukti_pembayaran) }}" target="_blank">Lihat Bukti</a>
                        @else
                            Belum ada bukti
                        @endif
                    </td> --}}
                    <td>
                        <label class="badge badge-{{ $pemesanan->status_pemesanan == 'pending' ? 'danger' : ($pemesanan->status_pemesanan == 'dp lunas' ? 'warning' : 'success') }}">
                            {{ ucfirst($pemesanan->status_pemesanan) }}
                        </label>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Dicetak pada: {{ now()->format('d-m-Y H:i:s') }}</p>
    </div>

</body>
</html>
