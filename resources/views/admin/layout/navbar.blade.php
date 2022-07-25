<ul class="nav nav-primary">
    @if (auth()->user()->level == 'admin')
        <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Admin Menu</h4>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.dashboard.index') }}"
                class="{{ request()->is('admin/dashboard*') ? 'active' : '' }}">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.tiket.index') }}" class="{{ request()->is('admin/tiket') ? 'active' : '' }}">
                <i class="fas fa-ticket-alt"></i>
                <p>Data Tiket</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.kuota.index') }}" class="{{ request()->is('admin/kuota') ? 'active' : '' }}">
                <i class="fas fa-database"></i>
                <p>Manajemen Kuota</p>
            </a>
        </li>
        <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Wisatawan Menu</h4>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.payment') }}" class="{{ request()->is('admin/payment') ? 'active' : '' }}">
                <i class="fas fa-credit-card"></i>
                <p>Konfirmasi Pembayaran</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.riwayatwisatawan.index') }}"
                class="{{ request()->is('admin/riwayatwisatawan') ? 'active' : '' }}">
                <i class="fas fa-history"></i>
                <p>Riwayat Pemesanan</p>
            </a>
        </li>
        <li class="nav-section">
            <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">User Account Menu</h4>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.user') }}" class="{{ request()->is('admin/user') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                <p>Data User</p>
            </a>
        </li>
    @endif
</ul>
