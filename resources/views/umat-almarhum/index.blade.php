@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <button class="btn btn-info pull-right" data-toggle="modal" data-target="#tambah-data">Tambah Data</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Tanggal Wafat</th>
                <th>Tanggal Pemakaman</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $dt)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dt->umat->nama}}</td>
                <td>{{$dt->tgl_wafat}}</td>
                <td>{{$dt->tgl_makam}}</td>
                <td>
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
                      <form class="form-horizontal" method="POST" action="{{ route('umat-almarhum-delete', $dt->id) }}" enctype="multipart/form-data">
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
                    <form method="POST" action="{{ route('umat-almarhum-update', $dt->id) }}" enctype="multipart/form-data">
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
                <label>Umat</label>
                 <select name="umat_id" id="" class="form-control">
                 <option value="{{$dt->umat_id}}">{{$dt->umat->nama}}</option>
                 @foreach ($umat as $key => $value)
                 <option value="{{$key}}">{{$value}}</option>
                 @endforeach
                 </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Tanggal Wafat</label>
                  <input class="form-control" id="datepicker1" name="tgl_wafat" placeholder="Tanggal Pemakaman" value="{{ $dt->tgl_wafat}}">
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Tanggal Pemakaman</label>
                 <input class="form-control" name="tgl_makam" placeholder="Enter Email" id="datepicker2" value="{{ $dt->tgl_makam}}">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
                      </div>
                      <div class="modal-footer">
                      <input type="hidden" name="id" value="{{$dt->id}}">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
      <!-- Modal Tambah Data -->
      <div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form method="POST" action="{{ route('umat-almarhum-store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-name" id="myModalLabel">Add Data</h4>
              </div>
              <div class="modal-body">
                  <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Name</label>
                <select name="umat_id" id="" class="form-control">
                 @foreach ($umat as $key => $value)
                 <option value="{{$key}}">{{$value}}</option>
                 @endforeach
                 </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Tanggal Pemakaman</label>
                <input class="form-control" name="tgl_wafat" placeholder="Tanggal Pemakaman " id="datepicker1" >
              </div>
              <!-- /.form-group -->
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Tanggal Wafat</label>
                 <input class="form-control" name="tgl_makam" placeholder="Tanggal Wafat" id="datepicker2">
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

    </div>
  </div>
</section>
@endsection
@section('scripts')
<script>
  $(function () {
        $('#datepicker1').datepicker({
      autoclose: true
    })
     $('#datepicker2').datepicker({
      autoclose: true
    })
     $('.select2').select2()
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