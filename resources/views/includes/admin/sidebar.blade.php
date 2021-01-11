<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Covid</div>
    </a> -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Message -->
    <!-- <div class="sidebar-card">
        <img class="sidebar-card-illustration mb-2" src="{{ url('backend/img/undraw_rocket.svg') }}" alt="">
        <p class="text-center mb-2"><strong>Portal Admin Covid 19 Sumbawa Barat !!</strong></p>
    </div> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <span style="font-size: 20px; margin-bottom:25px;">Dashboard</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider mt-4">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('totalcases.index') }}">
            <span>Jumlah Kasus</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('positips.index') }}">
            <span>Kasus Positip</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('recovers.index') }}">
            <span>Kasus Sembuh</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('deaths.index') }}">
            <span>Kasus Meninggal</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('cares.index') }}">
            <span>Kasus Perawatan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('quarantines.index') }}">
            <span>Kasus Karantina</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('travelers.index') }}">
            <span>Pelaku Perjalanan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('contacts.index') }}">
            <span>Kontak Erat</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('suspects.index') }}">
            <span>Kasus Suspek</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('probables.index') }}">
            <span>Kasus Probable</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('coverage.index') }}">
            <span>Peta Sebaran</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('release.index') }}">
            <span>Press Release</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('publications.index') }}">
            <span>Publikasi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('hospital.index') }}">
            <span>Rumah Sakit Rujukan</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-4">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->