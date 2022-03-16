<!DOCTYPE html>
<html>
<head>
    <title>Database Dealer Motor</title>
</head>
<body>

    <h2>Big Bike Shop</h2>
    <h3>Data Motor</h3>

    <a href="/motor/tambah"> + Tambah Motor Baru</a>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Stok</th>
            <th>Merek</th>
            <th>Opsi</th>
        </tr>
        @foreach($motor as $m)
        <tr>
            <td>{{ $m->motor_nama }}</td>
			<td>{{ $m->motor_jenis }}</td>
			<td>{{ $m->motor_stok }}</td>
			<td>{{ $m->motor_merek }}</td>
			<td>
                <a href="/motor/edit/{{ $m->motor_id }}">Edit</a>
				|
				<a href="/motor/hapus/{{ $m->motor_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>