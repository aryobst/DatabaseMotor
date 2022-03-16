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
 
	<form action="/motor/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jenis <input type="text" name="jenis" required="required"> <br/>
		Stok <input type="number" name="stok" required="required"> <br/>
		Merek <textarea name="merek" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>