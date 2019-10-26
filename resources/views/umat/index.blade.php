@extends('layouts.app')
@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Umat</h3>
              <a href="{{ route('umat-create') }}" class="btn btn-info pull-right">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Pekerjaan</th>
                  <th class="text-center">Status Kawin</th>
                  <th class="text-center">Alamat</th>
                  <th class="text-center">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($umat as $dt)
                <tr>
                  <td class="text-center">{{$dt->nama}}</td>
                  <td class="text-center">{{$dt->pekerjaan}}</td>
                  <td class="text-center">{{$dt->status_kawin}}</td>
                  <td class="text-center"> {{$dt->alamat}}</td>
                  <td class="text-center">
                 <a href="{{ route('umat-details',$dt->id) }}" type="button" class="btn btn-primary btn-xs"> <i class="fa fa-eye"></i> Details</a>
                  <a href="{{ route('umat-edit',$dt->id) }}" type="button" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> Edit</a>
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
                      <form class="form-horizontal" method="POST" action="{{ route('umat-delete', $dt->id) }}" enctype="multipart/form-data">
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
                    @endforeach
               
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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