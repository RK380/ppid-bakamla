<?php $__env->startSection('style'); ?>
<style>
    #myDataTable {
        font-size: 13px;
    }

    .dataTables_length {
        font-size: 13px;
    }

    .dataTables_filter {
        font-size: 13px;
    }

    .dataTables_info {
        font-size: 13px;
    }

    .dataTables_paginate {
        font-size: 13px;
    }
</style>
<?php $__env->stopSection(); ?>

<!-- ======= Hero Section ======= -->


<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <h1 data-aos="fade-up" style="margin-top: 60px;text-align: center">PPID Bakamla RI</h1>
        <h4 data-aos="fade-up" data-aos-delay="400" style="text-align: center">Informasi Publik</h4>
        <div class="row">
            <div class="col-12">
                <table id="myDataTable" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Dibuat</th>
                            <th>Informasi</th>
                            <th>Judul</th>
                            <th>Pengelola</th>
                            <th>File</th>
                            <!-- <th>Ukuran</th> -->
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            
                        <tr>
                            <td><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$item->created_at)->isoFormat('D MMMM Y HH:mm')); ?></td>
                            <td><?php echo e($item->klasifikasi->klasifikasi); ?></td>
                            <td><?php echo e($item->judul); ?></td>
                            <td>HUMAS</td>
                            <td><?php echo e(pathinfo(storage_path().$item->file, PATHINFO_EXTENSION)); ?></td>
                            <td><a href="<?php echo e(route('download.infopub', $item->id)); ?>" target="_blank" class="btn btn-sm btn-primary circle"> <i class="ti-download"></i> </a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</section>
  
  <main id="main">

  </main><!-- End #main -->
  
  <?php $__env->startSection('scripts'); ?>
    <script>
    $(document).ready(function () {
        $('#myDataTable').DataTable({
            // responsive: true,
            // pagingType: "listbox"
        });
    });
    </script>
  <?php $__env->stopSection(); ?>
  <?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/infopub.blade.php ENDPATH**/ ?>