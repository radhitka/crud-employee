<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
</head>

<body>

    <table style="width: 100%">
        <thead>
            <tr style="font-weight: 800">
                <td>Nama</td>
                <td>Nomor</td>
                <td>Jabatan</td>
                <td>Departemen</td>
                <td>Tanggal Masuk</td>
                <td>Foto</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr style="font-size: 15px">
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nomor }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->departmen }}</td>
                    <td>{{ $item->tanggal_masuk }}</td>
                    <td>
                        <img src="{{ $item->foto }}" alt="" srcset="" style="width: 20px">
                    </td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
