<!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">

                <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="/admin">
                                <!-- <img src="../be/src/assets/img/logo.svg" class="navbar-logo" alt="logo"> -->
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="/admin" class="nav-link"> Admin PPID </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        </div>
                    </div>
                </div>
                <div class="profile-info">
                    <div class="user-info">
                        <div class="profile-img">
                            <img src="<?php echo e(asset('../be/src/assets/img/face.png')); ?>" alt="avatar">
                        </div>
                        <div class="profile-content">
                            <h6 class="">Admin Humas</h6>
                            <p class="">Biro Umum</p>
                        </div>
                    </div>
                </div>
                                
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu active">
                        <a href="/admin" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
                            <li class="<?php if(request()->routeIs('admin.klasifikasi')): ?> active <?php endif; ?>">
                                <a href="<?php echo e(route('admin.klasifikasi')); ?>"> Klasifikasi PPID </a>
                            </li>
                            <li class="<?php if(request()->routeIs('admin.informasipublik')): ?> active <?php endif; ?>">
                                <a href="<?php echo e(route('admin.informasipublik')); ?>"> Informasi Publik </a>
                            </li>
                            <li class="<?php if(request()->routeIs('admin.sop')): ?> active <?php endif; ?>">
                                <a href="<?php echo e(route('admin.sop')); ?>"> SOP </a>
                            </li>
                            <li class="<?php if(request()->routeIs('admin.pesan')): ?> active <?php endif; ?>">
                                <a href="<?php echo e(route('admin.pesan')); ?>"> Pesan Masuk </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Setting & Logs</span></div>
                    </li>
                    
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  --><?php /**PATH /var/www/html/ppid/resources/views/be/partials/sidebar.blade.php ENDPATH**/ ?>