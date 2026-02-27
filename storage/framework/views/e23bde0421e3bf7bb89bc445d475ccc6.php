<?php $__env->startSection('content'); ?>
<div class="container">
                <div class="container">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/infopub">Form</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Data Informasi Publik</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row">

                        <div id="flLoginForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area" style="padding: 20px;position: relative;background-color: #0e1726;border-bottom-left-radius: 8px;border-bottom-right-radius: 8px;border: none;">
                                    <form action="<?php echo e(route('admin.informasipublik.update', $data->id)); ?>" method="POST" enctype="multipart/form-data" class="row g-3">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <div class="col-md-6">
                                            <label for="klasifikasi_id" class="form-label">Klasifikasi Informasi</label>
                                            <select name="klasifikasi_id" id="klasifikasi_id" class="form-select">
                                                <option value="" hidden>Pilih Klasifikasi</option>
                                                <?php $__currentLoopData = $klasifikasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>" <?php echo e(($data->klasifikasi_id == $item->id) ? 'selected' : ''); ?>><?php echo e($item->klasifikasi); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>    
                                        <div class="col-md-6">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text" name="judul" class="form-control" id="judul" value="<?php echo e($data->judul); ?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="ringkasan" class="form-label">Ringkasan</label>
                                            <textarea name="ringkasan" class="form-control" id="ringkasan"><?php echo e($data->ringkasan); ?></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="informasi_terkini" class="form-label">Informasi Terkini</label>
                                            <p class="fw-white"><?php echo e($data->file); ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" name="filelama" value=<?php echo e($data->file); ?>>
                                            <input type="file" name="file" class="form-control" id="file">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="/infopub" class="btn btn-gray">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('be.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/be/informasipublik/edit.blade.php ENDPATH**/ ?>