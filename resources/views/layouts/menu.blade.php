<div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="{{ Request::is('home', '/') ? "active" : "" }}">
                        <a href="{{url('home')}} "><i class="zmdi zmdi-view-dashboard"></i> <span> Beranda </span> </a>
                    </li>
    
                  
                    <li class="{{ Request::is('stuff', 'stuff/*') ? "active" : "" }}">
                        <a href="{{ route('stuff.index') }}"><i class="zmdi zmdi-view-dashboard"></i> <span> Barang </span> </a>
                    </li>

                    <li class="has-submenu {{ Request::is('barang','barang/*') ? "active" : "" }}">
                        <a href="#"><i class="zmdi zmdi-account-box"></i> <span> Data Transaksi </span> </a>
                        <ul class="submenu">
                           
                            {{-- <li class="{{ Request::is('transaction','transaction/*') ? "active" : "" }}"><a href="{{url('transaction/create')}}">Form Data</a></li> --}}
                            <li class="{{ Request::is('transaction','transaction/*') ? "active" : "" }}"><a href="{{ route('transaction.index')}}">Data Transaksi</a></li>
                           
                            {{-- <li class="{{ Request::is('transaction','transaction/*') ? "active" : "" }}"><a href="{{url('transaction')}}">Import Data</a></li> --}}
                          
                        </ul>
                    </li>
                   
                    <li class="has-submenu {{ Request::is('rule','rule/*','frequent','frequent/*') ? "active" : "" }}">
                        <a href="#"><i class="zmdi zmdi-account-box-o"></i><span> Hasil Apriori </span> </a>
                        <ul class="submenu">
                            <li class="{{ Request::is('rule','rule/*') ? "active" : "" }}">
                            <a href="{{ url('rule')}}">Aturan Asosiasi</a>
                            </li>
                            <li class="{{ Request::is('frequent','frequent/*') ? "active" : "" }}">
                                <a href="{{ url('frequent') }}">Frequensi</a>
                            </li>
                            <li class="{{ Request::is('frequent','frequent/*') ? "active" : "" }}">
                                <a href="{{ url('simulasi') }}">Rekomendasi</a>
                            </li>
                        </ul>
                    </li>
    
                    {{-- <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-file-text"></i><span> Laporan </span> </a>
                        <ul class="submenu">
                            <li class="{{ Request::is('frequent_report','frequent_report/*') ? "active" : "" }}">
                            <a href="{{ url('frequent_report')}}">Laporan Frequency</a>
                            </li>
                            <li class="{{ Request::is('items_report','items_report/*') ? "active" : "" }}">
                                <a href="{{ url('items_report') }}">Laporan Barang</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="{{ Request::is('report', 'report/*') ? "active" : "" }}">
                        <a href="{{ route('report.index') }}"><i class="zmdi zmdi-file-text"></i> <span> Laporan </span> </a>
                    </li>
                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>