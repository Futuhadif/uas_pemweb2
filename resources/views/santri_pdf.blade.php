<!DOCTYPE html>
<html>
<head>
    <title>Daftar Santri</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Daftar Santri</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nama Ibu</th>
                <th>Nama Ayah</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Santri</th>
                <th>No Hp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($santris as $santri)
            <tr>
                <td>{{ $santri->nama }}</td>
                <td>{{ $santri->nama_ibu }}</td>
                <td>{{ $santri->nama_ayah }}</td>
                <td>{{ $santri->alamat }}</td>
                <td>{{ $santri->tgllhr }}</td>
                <td>{{ $santri->jenis_santri }}</td>
                <td>{{ $santri->no_hp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
