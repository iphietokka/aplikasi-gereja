  <section class="sidebar" id="nav">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
        <a href="{{'home'}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          
          </a>
        
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Umat</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('umat') }}"><i class="fa fa-circle-o"></i> Data Umat</a></li>
             <li><a href="{{ url('anak-umat') }}"><i class="fa fa-circle-o"></i> Data Anak Umat</a></li>
            <li><a href="{{url('umat-almarhum')}}"><i class="fa fa-circle-o"></i> Data Umat Almarhum</a></li>
  
          </ul>
        </li>
        <li>
          <a href="{{url('laporan')}}">
            <i class="fa fa-th"></i> <span>Laporan</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li><a href="{{url('berita')}}"><i class="fa fa-circle-o text-red"></i> <span>Berita</span></a></li>
      </ul>
    </section>