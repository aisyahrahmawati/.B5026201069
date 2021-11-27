<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>

	<h3>Data Absensi</h3>
    <a href="/absen"> Kembali</a>
	<br/>
	<br/>

    <form action="/absen/store" method="post">
    {{ csrf_field() }}
    IDPegawai <input type="number" name="idpegawai"> <br/>
    Tanggal <input type="date" name="tanggal"> <br/>
    Status <input type="char" name="status"> <br/>
    <input type="submit" value="Simpan Data">
    </form>

</body>
</html>
