@extends('layouts.app')
@section('content')
<section class="content">
<div class="row">
<div class="col-md-12">
<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Tambah Data User</h3>
</div>

<form class="form-horizontal" role="form" method="POST" action="{{route('umat-store')}}" enctype="multipart/form-data">
{{ csrf_field() }} 
<div class="box-body">
<div class="form-group has-feedback">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-6">
        <input type="text" class="form-control {{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Nama" name="nama" value="{{ old('nama') }}">
         @if ($errors->has('nama'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nama') }}</strong>
                              </span>
                              @endif
    </div>
</div>
<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nik KK</label>
    <div class="col-sm-6">
        <input type="text" class="form-control {{ $errors->has('nik_kk') ? ' is-invalid' : '' }}" placeholder="Nomor Induk KK" name="nik_kk" value="{{ old('nik_kk') }}">
         @if ($errors->has('nik_kk'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nik_kk') }}</strong>
                              </span>
                              @endif
    </div>
</div>
<div class="form-group">  
<label for="inputEmail3" class="col-sm-3 control-label">NIK</label>
<div class="col-sm-6">
    <input class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}"" name="nik" placeholder="Nomor Iduk Keluarga" value="{{ old('nik') }}">
 @if ($errors->has('nik'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nik') }}</strong>
                              </span>
                              @endif
</div>
</div>
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">TTL</label>
    <div class="col-sm-6">
        <input type="text" class="form-control{{ $errors->has('ttl') ? ' is-invalid' : '' }}" placeholder="Tempat Tanggal Lahir" name="ttl" value="{{ old('ttl') }}">
         @if ($errors->has('ttl'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('ttl') }}</strong>
                              </span>
                              @endif
    </div>
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Usia</label>
    <div class="col-sm-6">
        <input type="text" class="form-control{{ $errors->has('usia') ? ' is-invalid' : '' }}" placeholder="Usia" name="usia" value="{{ old('usia') }}">
         @if ($errors->has('usia'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('usia') }}</strong>
                              </span>
                              @endif
    </div>
</div>
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Pekerjaan</label>
    <div class="col-sm-6">
    <input type="text" class="form-control{{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}" placeholder="Pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}">
         @if ($errors->has('pekerjaan'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('pekerjaan') }}</strong>
                              </span>
                              @endif
</div>
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Status Kawin</label>
    <div class="col-sm-6">
<select name="status_kawin" id="" class="form-control">
    <option value="">Pilih</option>
    <option value="belum">Belum Kawin</option>
    <option value="kawin">Kawin</option>
     <option value="cerai">Cerai</option>
</select>
         @if ($errors->has('status_kawin'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('status_kawin') }}</strong>
                              </span>
                              @endif
    </div>
</div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Alamat</label>
    <div class="col-sm-6">
         <input type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
        @if ($errors->has('alamat'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('alamat') }}</strong>
                              </span>
                              @endif
        </div>
</div>

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Sektor</label>
    <div class="col-sm-6">
    
   <input type="text" class="form-control{{ $errors->has('sektor') ? ' is-invalid' : '' }}" placeholder="Sektor" name="sektor" value="{{ old('sektor') }}">
           @if ($errors->has('sektor'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('sektor') }}</strong>
                              </span>
                              @endif
    </div>
</div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Unit</label>
    <div class="col-sm-6">
  <input type="text" class="form-control{{ $errors->has('unit') ? ' is-invalid' : '' }}" placeholder="Unit" name="unit" value="{{ old('unit') }}">
        @if ($errors->has('unit'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('unit') }}</strong>
                              </span>
                              @endif
    </div>
</div>
</div>
<div class="box-footer">
<a href="{{url('umat')}}" class="btn btn-danger"> Cancel</a>
<button type="submit" class="btn btn-info">Simpan</button>
</div>
</form>
</div>
</div>
</div>
</section>
@endsection

@section('scripts')
<script>
 $('#datepicker').datepicker({
     autoclose: true,
       format: 'yyyy-mm-dd'
   });
   $('#datepicker2').datepicker({
      autoclose: true,
       format: 'yyyy-mm-dd'
   });
   $('.select2').select2()
</script>
@endsection

