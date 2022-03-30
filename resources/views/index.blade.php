<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Database Dealer Motor</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap');

        html,
        body {
            background-color: #424242;
        }

        body {
            font-family: 'PT Sans Narrow', sans-serif;
        }
    </style>
</head>

<body>

    <header class="container-md mt-3 mb-3">
        <h2 class="text-light text-center fs-1 fw-bold">Big Bike Shop</h2>
        <h3 class="text-light text-center">Data Motor</h3>
    </header>

    <div class="container-md">
        <a href="/motor/tambah" class="btn btn-dark mb-4"> + Tambah Motor Baru</a>

        <table class="table table-dark  table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($motor as $m)
                <tr>
                    <td>{{ $m->motor_nama }}</td>
                    <td>{{ $m->motor_jenis }}</td>
                    <td>{{ $m->motor_stok }}</td>
                    <td>{{ $m->motor_merek }}</td>
                    <td class="btn-group btn-group-sm w-100" role="group" aria-label="Basic mixed styles example">
                        <a href="/motor/edit/{{ $m->motor_id }}" class="btn btn-outline-primary">Edit</a>
                        <a href="/motor/hapus/{{ $m->motor_id }}" class="btn btn-outline-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>
