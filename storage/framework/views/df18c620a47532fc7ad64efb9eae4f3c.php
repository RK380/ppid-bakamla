
<?php $__env->startSection('content'); ?>
<div class="container">
                <div class="container">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/klasifikasi">Form</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Data Master Klasifikasi IPP</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row">

                        <div id="flLoginForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area" style="padding: 20px;position: relative;background-color: #0e1726;border-bottom-left-radius: 8px;border-bottom-right-radius: 8px;border: none;">
                                    <form action="<?php echo e(route('admin.klasifikasi.update', $data->id)); ?>" method="POST" enctype="multipart/form-data" class="row g-3">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <div class="col-md-12">
                                            <label for="klasifikasi" class="form-label">Klasifikasi</label>
                                            <input type="text" name="klasifikasi" class="form-control" id="klasifikasi" value="<?php echo e($data->klasifikasi); ?>">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="/klasifikasi" class="btn btn-gray">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('be.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/be/klasifikasi/edit.blade.php ENDPATH**/ ?>