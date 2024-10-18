        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Dashboard</span></li>

                        @can('admin_panel_access')
                        <!-- dashboard-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.home') }}" aria-expanded="false">
                                <i class="mr-3 fas fa-tachometer-alt fa-fw" aria-hidden="true"></i>
                                <span class="hide-menu">Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.duenos.index') }}" aria-expanded="false">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span class="hide-menu">Casa /Duenos</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.asignacion_de_metros.listar') }}" aria-expanded="false">
                                <i class="fas fa-money-bill    "></i>
                                <span class="hide-menu">Asignación de Precio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.pagos.index') }}" aria-expanded="false">
                                <i class="fa-solid fa-cash-register"></i>
                                <span class="hide-menu">Pagos</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.pagos.pagosEnLinea') }}" aria-expanded="false">
                                <i class="fa-brands fa-edge-legacy"></i>
                                <span class="hide-menu">Pagos en Linea</span>
                            </a>
                        </li> -->

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.consumos.index') }}" aria-expanded="false">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                <span class="hide-menu">Asignar Consumo</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.duenos.deudores') }}" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Deudores</span>
                            </a>
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.reportes.index') }}" aria-expanded="false">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span class="hide-menu">Reportes</span>
                            </a>
                        </li>

                        @endcan


                        @canany(['users_access','roles_access','permissions_access'])
                        <li class="sidebar-item">

                            <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">

                                <i class="mr-3 mdi mdi-account" aria-hidden="true"></i>
                                <span class="hide-menu">Users Management</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level
                                @if(request()->is('admin/users') || request()->is('admin/users/*')) in @endif
                                @if(request()->is('admin/roles') || request()->is('admin/roles/*')) in @endif
                                @if(request()->is('admin/permissions') || request()->is('admin/permissions/*')) in @endif
                            ">
                                @can('users_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif" href="{{ route('admin.users.index') }}" aria-expanded="false">
                                        <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                        <span class="hide-menu">Users</span>
                                    </a>
                                </li>
                                @endcan

                                @can('roles_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/roles') || request()->is('admin/roles/*')) is_active @endif" href="{{ route('admin.roles.index') }}" aria-expanded="false">
                                        <i class="mr-3 mdi mdi-star" aria-hidden="false"></i>
                                        <span class="hide-menu">Roles</span>
                                    </a>
                                </li>
                                @endcan

                                @can('permissions_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/permissions') || request()->is('admin/permissions/*')) is_active @endif" href="{{ route('admin.permissions.index') }}" aria-expanded="false">
                                        <i class="mr-3 mdi mdi-key" aria-hidden="false"></i>
                                        <span class="hide-menu">Permissions</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcanany





                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->