<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src={{ asset('assets/img/logobkl.png')}} alt="">
        <h1 class="sitename">PPID</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li class="dropdown {{ request()->is('profil*','sejarah*','tugas*','visimisi*','strukturorg*') ? 'active' : '' }}"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/profil">Profil Singkat PPID</a></li>
              <li><a href="/sejarah">Sejarah Badan Keamanan Laut RI</a></li>
              <li><a href="/tugas">Tugas & Tanggung Jawab</a></li>
              <li><a href="/visimisi">Visi & Misi</a></li>
              <li><a href="/strukturorg">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              @foreach($klasifikasis as $klasifikasi)
              <li><a href={{ route('infopub', $klasifikasi->uuid) }}>{{ $klasifikasi->klasifikasi }}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="dropdown {{ request()->is('daftarinfo*','infopsm*','infopss*','infodkc*') ? 'active' : '' }}"><a href="#"><span>Daftar Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/daftarinfo">Informasi Publik Secara Berkala</a></li>
              <li><a href="/infopsm">Informasi Publik Serta Merta</a></li>
              <li><a href="/infopss">Informasi Publik Setiap Saat</a></li>
              <li><a href="/infodkc">Informasi Dikecualikan</a></li>
            </ul>
          </li>
          <li><a href="{{ route('pemohon.register') }}" class="{{ request()->routeIs('pemohon.register') ? 'active' : '' }}">Permohonan Informasi</a></li>
          {{-- <li><a href="https://lpse.bakamla.go.id" class="{{ request()->is('https://lpse.bakamla.go.id') ? 'active' : '' }}">Informasi PBJ</a></li> --}}
          <li class="dropdown {{ request()->is('standpel*','kep90*') ? 'active' : '' }}"><a href="#"><span>Standar Pelayanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/standpel">Standar Layanan Operasional</a></li>
              <li><a href="/kep90">Kep90 Standar Pelayanan</a></li>
            </ul>
          </li>
          <li><a href="/statistik" class="{{ request()->routeIs('halaman.statistik') ? 'active' : '' }}">Statistik</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" href="/faq">FAQ</a>

    </div>
</header>