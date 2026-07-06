<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=<?php echo e(asset('assets/img/logobkl.png')); ?> alt="">
        <h1 class="sitename">PPID</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li class="dropdown <?php echo e(request()->is('profil*','sejarah*','tugas*','visimisi*','strukturorg*') ? 'active' : ''); ?>"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
              <?php $__currentLoopData = $klasifikasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $klasifikasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href=<?php echo e(route('infopub', $klasifikasi->uuid)); ?>><?php echo e($klasifikasi->klasifikasi); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </li>
          <li class="dropdown <?php echo e(request()->is('daftarinfo*','infopsm*','infopss*','infodkc*') ? 'active' : ''); ?>"><a href="#"><span>Daftar Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/daftarinfo">Informasi Publik Secara Berkala</a></li>
              <li><a href="/infopsm">Informasi Publik Serta Merta</a></li>
              <li><a href="/infopss">Informasi Publik Setiap Saat</a></li>
              <li><a href="/infodkc">Informasi Dikecualikan</a></li>
            </ul>
          </li>
          <li><a href="<?php echo e(route('pemohon.register')); ?>" class="<?php echo e(request()->routeIs('pemohon.register') ? 'active' : ''); ?>">Permohonan Informasi</a></li>
          
          <li class="dropdown <?php echo e(request()->is('standpel*','kep90*') ? 'active' : ''); ?>"><a href="#"><span>Standar Pelayanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/standpel">Standar Layanan Operasional</a></li>
              <li><a href="/kep90">Kep90 Standar Pelayanan</a></li>
            </ul>
          </li>
          <li><a href="/statistik" class="<?php echo e(request()->routeIs('halaman.statistik') ? 'active' : ''); ?>">Statistik</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" href="/faq">FAQ</a>

    </div>
</header><?php /**PATH /var/www/html/ppid/resources/views/halaman/partials/header.blade.php ENDPATH**/ ?>