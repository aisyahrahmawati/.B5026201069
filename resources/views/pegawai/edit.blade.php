@extends('layout.ceria')

@section('title', 'Data Pegawai SM Ent.')

<style>
    form {
        padding: 30px;
        width: 60%;
        background-color: rgba(206, 149, 149, 0.867);
        margin: auto;
    }

    h3 {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
    }

</style>

@section('isikonten')

	<h3>Edit Data Pegawai SM Ent.</h3>

	<div class="container">

	@foreach($pegawai as $p)
	<form class="form-horizontal" action="/pegawai/update" method="post">
		{{ csrf_field() }}

        <div class="form-group">
            <div class="row">
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                <div class="mb-2">
                    <label class="control-label col-sm-2">Nama :</label>
                </div>
                <div class="col-2 form-group">
                    <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
                <div class="mb-2">
                    <label class="control-label col-sm-2">Jabatan :</label>
                </div>
                <div class="col-2 form-group">
                    <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
                <div class="mb-2">
                    <label class="control-label col-sm-2">Umur :</label>
                </div>
                <div class="col-2 form-group">
                    <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
                </div>
                <div class="mb-2">
                    <label class="control-label col-sm-2">Alamat :</label>
                </div>
                <div class="col-2 form-group">
                    <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-primary" type="submit" value="simpan">Simpan</button>
                </div>
                <div class="col-sm-offset-8 col-sm-10">
                    <button class="btn btn-warning" type="reset" value="kembali"><a href="/absen">Kembali</a></button>
                </div>
            </div>
        </div>
    </div>
	</form>
	@endforeach


