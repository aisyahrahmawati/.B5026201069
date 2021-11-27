<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>

	<h3>Edit Absensi</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

    @foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}"> <br/>
		IDPegawai <input type="number" name="idpegawai" value="{{ $a->IDPegawai }}"> <br/>
		Tanggal <input type="date" name="tanggal" value="{{ $a->Tanggal }}"> <br/>
		Status <input type="char" name="status" value="{{ $a->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
