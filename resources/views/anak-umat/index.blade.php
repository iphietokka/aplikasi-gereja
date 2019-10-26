@extends('layouts.app')
@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Anak Umat</h3>
              <a href="#"  class="btn btn-info pull-right" data-toggle="modal" data-target="#tambah-data">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th class="text-center">Orang Tua</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Anak Ke-</th>
                  <th class="text-center">Pekerjaan</th>
                  <th class="text-center">TTL</th>
                  <th class="text-center">NIK</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($anakumat as $dt)
                <tr>
                <td class="text-center">{{$dt->umat->nama}}</td>
                  <td class="text-center">{{$dt->nama}}</td>
                  <td class="text-center">{{$dt->anak_ke}}</td>
                  <td class="text-center">{{$dt->pekerjaan}}</td>
                  <td class="text-center">{{$dt->ttl}}</td>
                  <td class="text-center"> {{$dt->nik}}</td>
                  <td class="text-center">
                      <a href="" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit_modal{{$dt->id}}"> <i class="fa fa-edit"></i> Edit</a>
                  <a href="" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete_modal{{$dt->id}}"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
                 {{-- Modal Start --}}
              <div class="modal fade" tabindex="-1" role="dialog" id="delete_modal{{$dt->id}}">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-body text-center">
                      <div class="row">

                        <h4 class="modal-heading">Are You Sure?</h4>
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <form class="form-horizontal" method="POST" action="{{ route('anak-umat-delete', $dt->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="reset" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </div>
                    </form>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
              {{-- END MODAL --}}
               <div class="modal fade" id="edit_modal{{$dt->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form method="POST" action="{{ route('anak-umat-update', $dt->id) }}" enctype="multipart/form-data">
                      {{ csrf_field() }}

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-name" id="myModalLabel">Edit Data {{ $dt->name}}</h4>
                      </div>
                      <div class="modal-body">
                        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Name</label>
                <select name="umat_id" id="" class="form-control">
                <option value="{{$dt->umat_id}}">{{$dt->umat_id}}</option>
                @foreach ($umat as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Username</label>
                 <input type="hidden" name="id" value="{{$dt->id}}">
                  <input class="form-control" name="nama" placeholder="Nama" value="{{ $dt->nama}}">
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Anak Ke</label>
                 <input class="form-control" name="anak_ke" placeholder="Anak Ke" value="{{ $dt->anak_ke}}">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>NIK</label>
               <input type="text" class="form-control" name="nik" placeholder="NIK">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>TTL</label>
              <input type="text" class="form-control" name="ttl" value="{{$dt->ttl}}"> 
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" value="{{$dt->pekerjaan}}" class="form-control">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
                @endforeach
               
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           <div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form method="POST" action="{{ route('anak-umat-store') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-name" id="myModalLabel">Tambah Data Anak</h4>
                      </div>
                      <div class="modal-body">
                        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Name</label>
                <select name="umat_id" id="" class="form-control">
                <option value="">Pilih</option>
                @foreach ($umat as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Nama</label>
                  <input class="form-control" name="nama" placeholder="Nama">
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Anak Ke</label>
                 <input class="form-control" name="anak_ke" placeholder="Anak Ke">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>NIK</label>
               <input type="text" class="form-control" name="nik" placeholder="NIK">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>TTL</label>
              <input type="text" class="form-control" name="ttl"> 
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection
@section('scripts')
    <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection