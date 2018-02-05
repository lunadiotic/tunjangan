<div class="left side-menu">
  <div class="sidebar-inner slimscrollleft">
      <!--- Divider -->
      <div id="sidebar-menu">
          <ul>

            <li class="text-muted menu-title">Navigation</li>

                @if (Auth::user()->role == 'admin')
                <li>
                    <a href="{{ route('home') }}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                </li>

                <li>
                    <a href="{{ route('user.index') }}" class="waves-effect"><i class="ti-user"></i> <span> User </span> <span class="menu-arrow"></span></a>
                </li>

                <li>
                    <a href="{{ route('anggota.index') }}" class="waves-effect"><i class="ti-user"></i> <span> Anggota </span> <span class="menu-arrow"></span></a>
                </li>

                <li>
                    <a href="{{ route('remun.selectdate') }}" class="waves-effect"><i class="ti-user"></i> <span> Remunerasi </span> <span class="menu-arrow"></span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i><span> Laporan </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('remun.laporan') }}"> Per-Tanggal</a></li>
                        <li><a href="{{ route('remun.laporan.month') }}"> Per-Bulan</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i><span> Pengaturan </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('pangkat.index') }}"> Pangkat</a></li>
                        <li><a href="{{ route('jabatan.index') }}"> Jabatan</a></li>
                        <li><a href="{{ route('tunjangan.index') }}"> Status Tunjangan</a></li>
                        <li><a href="{{ route('setting.index') }}"> Pengaturan</a></li>
                    </ul>
                </li>
                @else
                <li>
                    <a href="{{ route('home') }}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                </li>
                <li>
                    <a href="{{ route('remun.laporan') }}" class="waves-effect"><i class="ti-settings"></i> <span> Laporan </span> <span class="menu-arrow"></span></a>
                </li>
                @endif

          </ul>
          <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
  </div>
</div>
