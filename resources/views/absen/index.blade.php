<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>

	<h3>Tabel Absen</h3>

	<a href="/absen/tambah"> + Tambah Absensi Baru</a>

	<br/>
	<br/>


<table border="1">
    <tr>
        <th>ID</th>
        <th>IDPegawai</th>
        <th>Tanggal</th>
        <th>Status</th>
    </tr>
    @foreach($absen as $a)
    <tr>
        <td>{{ $a->ID }}</td>
        <td>{{ $a->IDPegawai }}</td>
        <td>{{ $a->Tanggal }}</td>
        <td>{{ $a->Status }}</td>
        <td>
            <a href="/absen/edit/{{ $a->ID }}">Edit</a>

            <a href="/absen/hapus/{{ $a->ID }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
