@extends('layouts.app')
@section('content')
      <section class="content">
      <div class="row">
            <!-- /.box-header -->
            <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Data Umat</a></li>
              <li><a href="#timeline" data-toggle="tab">Data Anak</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <table class="table table-bordered">

                    <tr>
                        <th>Nama</th>
                        <td>{{ $umat->nama }}</td>
                    </tr>
                    <tr>
                        <th>Nomo Induk (KK)</th>
                        <td>{{ $umat->nik_kk }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Induk</th>
                        <td>{{ $umat->nik }}</td>
                    </tr>
                    <tr>
                        <th>TTL</th>
                        <td>{{$umat->ttl}}</td>
                    </tr>
                    <tr>

                        <th>Usia</th>
                        <td>{{ $umat->usia }}</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan</th>
                        <td> {{  $umat->pekerjaan }}</td>
                    </tr>
                    <tr>
                        <th>Status Kawin</th>
                        <td>{{ $umat->status_kawin }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{$umat->alamat}}</td>
                    </tr>
                    <tr>
                        <th>Sektor</th>
                         <td>{{$umat->sektor}}</td>
                    </tr>
                    <tr>
                        <tr>
                            <th>Unit</th>
                            <td>{{$umat->unit}}</td>
                        </tr>
                    </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                  <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Anak Ke-</th>
                  <th class="text-center">Pekerjaan</th>
                  <th class="text-center">TTL</th>
                  <th class="text-center">NIK</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                <tr>
                  <td class="text-center">{{$dt->nama}}</td>
                  <td class="text-center">{{$dt->anak_ke}}</td>
                  <td class="text-center">{{$dt->pekerjaan}}</td>
                  <td class="text-center">{{$dt->ttl}}</td>
                  <td class="text-center"> {{$dt->nik}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
       
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