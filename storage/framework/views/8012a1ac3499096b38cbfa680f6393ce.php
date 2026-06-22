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


<section id="values" class="values section" style="background-image:linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)),url('<?php echo e(asset('assets/img/bg-original.jpg')); ?>');background-size: cover;
    background-position: center;">
    <div class="container section-title" data-aos="fade-up">
        <p>PPID Bakamla RI</p>
        <h2>Informasi Publik<br></h2>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="content-panel" style="padding:15px;background-color:#f5f5f5;margin-bottom:5px;border-radius:10px;">
            <div class="content-body-panel">
                <div class="row">

                <div class="container">
                  <h5 data-aos="fade-up" data-aos-delay="400" style="text-align: center">Daftar Informasi</h5>
                    <div class="row">
                      <div data-aos="fade-up" data-aos-delay="400" class="col-12">
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
                                    <td><a href="<?php echo e(route('download.infopub', $item->id)); ?>" target="_blank" class="btn btn-sm btn-primary circle"> <i class="bi bi-arrow-down"></i> </a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                      </div>
                    </div>
                </div>
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
            scrollX: true,
            responsive: false,
            autoWidth: false,
            order: [
                    [1, 'desc']
                ], // Mengurutkan berdasarkan kolom kedua (indeks 1) secara ascending
                columnDefs: [{
                        targets: 0,
                        orderable: false,
                        searchable: false
                    } // disable column index 0 being sort or search
            ]
        });
    });
    </script>
  <?php $__env->stopSection(); ?>
  <?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/infopub.blade.php ENDPATH**/ ?>