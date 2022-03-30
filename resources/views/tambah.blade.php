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

        .max-w200 {
            min-width: 250px;
        }
    </style>
</head>

<body>

    <header class="container-md mt-3 mb-4">
        <h2 class="text-light text-center fs-1 fw-bold">Big Bike Shop</h2>
        <h3 class="text-light text-center">Data Motor</h3>
    </header>

    <div class="container-sm w-50 max-w200">

        <a href="/motor" class="btn btn-dark mb-4"> Kembali</a>

        <form action="/motor/store" method="post">
            {{ csrf_field() }}
            <!-- Nama <input type="text" name="nama" required="required"> <br />
            Jenis <input type="text" name="jenis" required="required"> <br />
            Stok <input type="number" name="stok" required="required"> <br />
            Merek <textarea name="merek" required="required"></textarea> <br /> -->

            <div class="form-floating mb-3">
                <input name="nama" class="form-control" id="floatingInput" placeholder="name@example.com"
                    required="required">
                <label for="floatingInput">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="jenis" class="form-control" id="floatingInput" placeholder="name@example.com"
                    required="required">
                <label for="floatingInput">Jenis</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="stok" class="form-control" id="floatingInput" placeholder="name@example.com"
                    required="required">
                <label for="floatingInput">Stok</label>
            </div>
            <div class="form-floating">
                <textarea name="merek" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                    required="required"></textarea>
                <label for="floatingTextarea">Merek</label>
            </div>

            <input type="submit" class="btn btn-dark mt-4 float-end" value="Simpan Data">
        </form>

    </div>
</body>

</html>
