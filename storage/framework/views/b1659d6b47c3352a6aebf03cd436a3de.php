<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=<?php echo e(asset('assets/img/logobkl.png')); ?> alt="">
        <h1 class="sitename">PPID</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li class="dropdown <?php echo e(request()->is('profil*','sejarah*','tugas*','visimisi*','strukturorg*') ? 'active' : ''); ?>"><a href="#"><span> <i class="bi bi-person toggle-dropdown"></i> Profil</span> </a>
            <ul>
              <li><a href="/profil"><span><i class="bi bi-person toggle-dropdown"></i> Profil Singkat PPID</span></a></li>
              <li><a href="/sejarah"><span><i class="bi bi-hourglass-top toggle-dropdown"></i> Sejarah Badan Keamanan Laut RI</span></a></li>
              <li><a href="/tugas"><span><i class="bi bi-person-badge toggle-dropdown"></i> Tugas & Tanggung Jawab</span></a></li>
              <li><a href="/visimisi"><span><i class="bi bi-bullseye toggle-dropdown"></i> Visi & Misi</span></a></li>
              <li><a href="/strukturorg"><span><i class="bi bi-signpost-split toggle-dropdown"></i> Struktur Organisasi</span></a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span><i class="bi bi-file-earmark-text toggle-dropdown"></i> Informasi Publik</span> </a>
            <ul>
              <?php $__currentLoopData = $klasifikasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $klasifikasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href=<?php echo e(route('infopub', $klasifikasi->uuid)); ?>><?php echo e($klasifikasi->klasifikasi); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </li>
          <li class="dropdown <?php echo e(request()->is('daftarinfo*','infopsm*','infopss*','infodkc*') ? 'active' : ''); ?>"><a href="#"><span><i class="bi bi-info-circle toggle-dropdown"></i> Daftar Informasi</span> </a>
            <ul>
              <li><a href="/daftarinfo"><span><i class="bi bi-info-circle toggle-dropdown"></i> Informasi Publik Secara Berkala</span></a></li>
              <li><a href="/infopsm"><span><i class="bi bi-newspaper toggle-dropdown"></i> Informasi Publik Serta Merta</span></a></li>
              <li><a href="/infopss"><span><i class="bi bi-infinity toggle-dropdown"></i> Informasi Publik Setiap Saat</span></a></li>
              <li><a href="/infodkc"><span><i class="bi bi-dash-circle toggle-dropdown"></i> Informasi Dikecualikan</span></a></li>
            </ul>
          </li>
          <li><a href="<?php echo e(route('pemohon.register')); ?>" class="<?php echo e(request()->routeIs('pemohon.register') ? 'active' : ''); ?>"><span><i class="bi bi-pen toggle-dropdown"></i> Permohonan Informasi</span></a></li>
          
          <li class="dropdown <?php echo e(request()->is('standpel*','kep90*') ? 'active' : ''); ?>"><a href="#"><span><i class="bi bi-card-checklist toggle-dropdown"></i> Standar Pelayanan</span> </a>
            <ul>
              <li><a href="/standpel"><span><i class="bi bi-gear toggle-dropdown"></i> Standar Layanan Operasional</span></a></li>
              <li><a href="/kep90"><span><i class="bi bi-journal-text toggle-dropdown"></i> Kep90 Standar Pelayanan</span></a></li>
            </ul>
          </li>
          <li><a href="/statistik" class="<?php echo e(request()->routeIs('halaman.statistik') ? 'active' : ''); ?>"><span><i class="bi bi-activity toggle-dropdown"></i> Statistik </span></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" href="/faq"><span><i class="bi bi-question-circle toggle-dropdown"></i> FAQ</span></a>

    </div>
</header><?php /**PATH /var/www/html/ppid/resources/views/halaman/partials/header.blade.php ENDPATH**/ ?>