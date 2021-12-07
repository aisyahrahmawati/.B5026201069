@extends('layout.ceria')
@section('title', 'Daftar Pegawai SM Ent.')

<style>
    h2 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
    }

    .tambah {
        padding: 20px;
        color: rgb(0, 0, 0);
    }

    #pegawai {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        width: 80%;
        text-align: center;
        margin: auto;
        border-collapse: collapse;
    }

    #pegawai td,
    #pegawai th {
        border: 1px solid #c7c7c7;
        padding: 8px;
    }

    #pegawai tr:nth-child(even) {
        background-color: #c7baaa;
    }

    #pegawai tr:hover {
        background-color: #dddddd;
    }

    #pegawai th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #fdfdfd;
        color: black;
    }

</style>

@section('isikonten')

    <h2>Daftar Pegawai SM Ent.</h2>
    <div class="tambah">
        <button type="button" class="btn btn-warning">
            <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
        </button>
    </div>

    <table id="pegawai" border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Ket.</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}">
                        <button type="button" class="btn btn-info">Edit</button>
                    </a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}">
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

    </body>

    </html>
