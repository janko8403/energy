<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                            <ul class="sub-menu">
                                <li class="{{ (Request::is('admin/dashboard/') ? 'active' : '') }}">
                                    <a href="{{ url('admin/dashboard/') }}">Przywidz</a>
                                </li>
                                {{-- <li class="{{ (Request::is('admin/dashboard/mlawa') ? 'active' : '') }}">
                                    <a href="{{ url('admin/dashboard/mlawa') }}">Mława</a>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="{{ (Request::is('admin/clients') ? 'active' : '') }}">
                            <a href="{{ url('admin/clients') }}"><i class="icon mdi mdi-layers"></i><span>Klienci</span></a>
                        </li>
                        <li class="{{ (Request::is('admin/measurement') ? 'active' : '') }}">
                            <a href="{{ url('admin/measurement') }}"><i class="icon mdi mdi-chart-donut"></i><span>Pomiary</span></a>
                        </li>
                        <li class="{{ (Request::is('admin/logs') ? 'active' : '') }}">
                            <a href="{{ url('admin/logs') }}"><i class="icon mdi mdi-folder"></i><span>Logi</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
