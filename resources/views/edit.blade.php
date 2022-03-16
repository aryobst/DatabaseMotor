<!DOCTYPE html>
<html>
<head>
	<title>Database Dealer Motor</title>
</head>
<body>
 
	<h2>Big Bike Shop</h2>
	<h3>Data Motor</h3>
 
	<a href="/motor"> Kembali</a>
	
	<br/>
	<br/>

    @foreach($motor as $m)
	<form action="/motor/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->motor_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $m->motor_nama }}"> <br/>
		Jenis <input type="text" required="required" name="jenis" value="{{ $m->motor_jenis }}"> <br/>
		Stok <input type="number" required="required" name="stok" value="{{ $m->motor_stok }}"> <br/>
		Merek <textarea required="required" name="merek">{{ $m->motor_merek }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>