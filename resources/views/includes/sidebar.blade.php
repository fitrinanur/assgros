{{-- <div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('home')}}"><i class="icon-speedometer"></i> Dashboard</a>
            </li>
            <li class="nav-title">
                Data Mining
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Data</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('barang/create')}}"><i class="icon-puzzle"></i> Manual Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('barang')}}"><i class="icon-puzzle"></i> Penjualan Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('stok')}}"><i class="icon-puzzle"></i> Stok</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Analisa</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('rule')}}"><i class="icon-puzzle"></i> Import Rule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('frequent')}}"><i class="icon-puzzle"></i> Frequent Item</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{url('simulasi')}}"><i class="icon-puzzle"></i> Simulasi</a>
                    </li> 
                </ul>
            </li>
        </ul>
    </nav>
</div> --}}

<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                
                      <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                      <h5 class="centered">Marcel Newman</h5>
                          
                    <li class="mt">
                        <a class="active" href=" {{url('home')}} ">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
  
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-desktop"></i>
                            <span>Data</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="{{url('barang/create')}}">Manual Form</a></li>
                            <li><a  href="{{url('barang')}}">Import Data</a></li>
                            {{-- <li><a  href="panels.html">Panels</a></li> --}}
                        </ul>
                    </li>
  
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-cogs"></i>
                            <span>Analisa</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="calendar.html">Setting Rule</a></li>
                            <li><a  href="gallery.html">Frequent Item</a></li>
                            <li><a  href="todo_list.html">Todo List</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->