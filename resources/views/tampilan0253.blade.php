<head>
    <meta name='viewport' content="width=device-width,
    initial=scale=1">
    <title>Data Mahasiswa</title>
    <style>
        table{
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
        thead{
            background-color: #f2f2f2;
        }
        th, td{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
            padding: 8px 16px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div style="overflow-x: auto">


        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jk</th>
                    <th>Tlp</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                @foreach ($anggotadata as $agt)
                    
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $agt->anggota_id }}</td>
                    <td>{{ $agt->anggota_nama }}</td>
                    <td>{{ $agt->anggota_alamat }}</td>
                    <td>{{ $agt->anggota_jk }}</td>
                    <td>{{ $agt->anggota_telp }}</td>
                    <td>
                        <a href="#">Edit</a>
                        |
                        <a href="#">Hapus</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</body>