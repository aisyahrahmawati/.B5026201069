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

	<h3>Data Pegawai SM Ent.</h3>

    <div class="container">
	<form  class="form-horizontal" action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="form-group">
            <div class="row">
                <div class="mb-2">
                    <label class="control-label col-sm-2">Nama :</label>
                </div>
                <div class="col-2 form-group">
                    <input type="text" name="nama" required="required">
                </div>
                <div class="mb-2">
                    <label class="control-label col-sm-2">Jabatan :</label>
                </div>
                <div class="col-2 form-group">
                    <input type="text" name="jabatan" required="required">
                </div>
                <div class="mb-2">
                    <label class="control-label col-sm-2">Umur :</label>
                </div>
                <div class="col-2 form-group">
                    <input type="number" name="umur" required="required">
                </div>
                <div class="mb-2">
                    <label class="control-label col-sm-2">Alamat :</label>
                </div>
                <div class="col-2 form-group">
                    <textarea name="alamat" required="required"></textarea>
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

