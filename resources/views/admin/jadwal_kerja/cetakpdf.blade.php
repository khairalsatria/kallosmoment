<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Jadwal Kerja</title>
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

    <h1>Laporan Data Jadwal Kerja</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Klien</th>
                <th>Kategori Paket</th>
                <th>Tanggal Event</th>
                <th>Alamat Event</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwalKerjas as $index => $jadwalKerja)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $jadwalKerja->nama_klien }}</td>
                    <td>{{ $jadwalKerja->nama_kategori }}</td>
                    <td>{{ \Carbon\Carbon::parse($jadwalKerja->tanggal_event)->format('d-m-Y') }}</td>
                    <td>{{ $jadwalKerja->alamat_event }}</td>
                    <td>
                        @php
                            // Menentukan status
                            $tanggalSekarang = now(); // Mengambil tanggal dan waktu saat ini
                            $tanggal_event = \Carbon\Carbon::parse($jadwalKerja->tanggal_event); // Mengonversi tanggal jadwal ke objek Carbon

                            // Menentukan status
                            if ($tanggalSekarang > $tanggal_event) {
                                $status = 'done';
                            } else {
                                $status = $jadwalKerja->status;
                            }
                        @endphp

                        <label class="badge badge-{{ ($status == 'soon' ? 'warning' : ($status == 'done' ? 'success' : 'primary')) }}">
                            {{ ucfirst($status) }}
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
