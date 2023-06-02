<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Demo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">DASHBOARD</li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MODULES</li>
                <li class="nav-item {{ Request::is('surats', 'surats/create', 'surats/*', 'surats/*/edit', 'search/surats*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('surats', 'surats/create', 'surats/*', 'surats/*/edit', 'search/surats*') ? 'active' : '' }}">
                        @if (Request::is('surats', 'surats/create', 'surats/*', 'surats/*/edit', 'search/surats*'))
                            <i class="nav-icon fas fa-envelope-open-text"></i>
                        @else
                            <i class="nav-icon fas fa-envelope"></i>
                        @endif
                        <p>
                            Arsip Surat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('surats.index') }}" class="nav-link {{ Request::is('surats', 'search/surats*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Index</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('surats.create') }}" class="nav-link {{ Request::is('surats/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Request::is('atks', 'atks/create', 'atks/*', 'atks/*/edit', 'search/atks*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('atks', 'atks/create', 'atks/*', 'atks/*/edit', 'search/atks*') ? 'active' : '' }}">
                        @if (Request::is('atks', 'atks/create', 'atks/*', 'atks/*/edit', 'search/atks*'))
                            <i class="nav-icon fas fa-book-open"></i>
                        @else
                            <i class="nav-icon fas fa-book"></i>
                        @endif
                        <p>
                            Pencatatan ATK
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('atks.index') }}" class="nav-link {{ Request::is('atks', 'search/atks*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Index</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('atks.create') }}" class="nav-link {{ Request::is('atks/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
