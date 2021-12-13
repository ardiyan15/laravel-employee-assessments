<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Penilaian Karyawan</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    @if ($menu === 'dashboard')
                        <a href="{{ route('home') }}" class="nav-link active"><i
                                class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    @else
                        <a href="{{ route('home') }}" class="nav-link"><i
                                class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    @endif
                </li>
                @if ($menu === 'master')
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Data Master
                                <i class="right fas fa-angle-down"></i>
                            </p>
                        </a>
                    @else
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Data Master
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                @endif
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        @if ($sub_menu === 'user')
                            <a href="{{ route('users.index') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User</p>
                            </a>
                        @else
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User</p>
                            </a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('employees.index') }}" class="nav-link @if ($sub_menu === 'karyawan') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Karyawan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('divisions.index') }}" class="nav-link @if ($sub_menu === 'divisi') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Divisi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('subdivisions.index') }}" class="nav-link @if ($sub_menu === 'sub_divisi') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sub Divisi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('managers.index') }}" class="nav-link @if ($sub_menu === 'sub_divisi') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manager</p>
                        </a>
                    </li>
                </ul>
                </li>
                @if ($menu === 'transaksi')
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Transaksi
                                <i class="right fas fa-angle-down"></i>
                            </p>
                        </a>
                    @else
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Transaksi
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                @endif
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('evaluations.index') }}" class="nav-link @if ($sub_menu === 'nilai') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Penilaian Karyawan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contracts.index') }}" class="nav-link @if ($sub_menu === 'kontrak') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kontrak Karyawan</p>
                        </a>
                    </li>
                </ul>
                </li>
                @if ($menu === 'laporan')
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Laporan
                                <i class="right fas fa-angle-down"></i>
                            </p>
                        </a>
                    @else
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Laporan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                @endif
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('report.reportdivisionemployee') }}"
                            class="nav-link @if ($sub_menu === 'div_employee') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Karyawan Perdivisi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('report.employeestatus') }}" class="nav-link @if ($sub_menu === 'status') active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Karyawan IN / OFF</p>
                        </a>
                    </li>
                </ul>
                </li>
                <hr color="white" width="200px;">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <li class="nav-item">
                        <button class="btn btn-sm nav-link text-left font-weight-bold text-mute" style="width: 100%;">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </button>
                    </li>
                </form>
            </ul>
        </nav>
    </div>
</aside>
