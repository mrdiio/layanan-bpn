<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permohonan Selesai</title>

    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center">Daftar Permohonan Tanah Selesai</h2>

    <table id="customers">
        <thead style="">
            <tr>
                <th width=5%>#</th>
                <th>No. Pemohon</th>
                <th>Nama</th>
                <th>Alamat Tanah</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permohonan as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nomor_pemohon }}</td>
                <td>{{ $data->pemohon->nama }}</td>
                <td>{{ $data->tanah->jalan.', '.$data->tanah->desa.', '.$data->tanah->kecamatan }}</td>
                <td>{{ $data->updated_at->formatLocalized("%d %B %Y") }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>