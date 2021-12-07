@extends('layout.ceria')

@section('title', 'Data Absen Pegawai')

<style>
    form {
        padding: 40px;
        width: 100%;
        background-color: rgba(206, 149, 149, 0.867);
        margin: 2px, 0, 0, 0;
        box-align: initial;
    }
    </style>
    
@section('isikonten')

@section('judulhalaman', 'Absensi Pegawai SM Ent.')

    <div class="container">
	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        <div class="form-group">
        <div class="row">
            <div class="mb-3">
		<label>Pegawai :</label>
    </div>
    <div class="form-group col-sm-2">
        <select id="idpegawai" name="idpegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
    </div>
            <div class="form-group row">
                <label for="dtpickerdemo" class="mb-3 control-label">Tanggal :</label>
                    <div class='col-sm-2 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                    });
                </script>
                <div class="mb-3">
            <label>Status Absensi:</label>
        </div>
       <div class="mb-3">
           <input type="radio" id="hadir" name="status" value="H">
  <label for="hadir">Hadir</label><br>
  <input type="radio" id="tidak" name="status" value="T" checked="checked">
  <label for="tidak">Tidak Hadir</label><br>
</div>
<div class="col-sm-2">
    <button class="btn btn-primary" type="submit" value="simpan">Simpan</button>
</div>
<div class="col-sm-2">
    <button class="btn btn-warning" type="reset" value="kembali"><a href="/absen">Kembali</a></button>
</div>
    </div>
</div>
</div>
	</form>

@endsection

