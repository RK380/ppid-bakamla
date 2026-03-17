<?php $__env->startSection('content'); ?>
<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">
        <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/sop">Form</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Data Master SOP</li>
                    </ol>
                </nav>
            </div>
        <!-- /BREADCRUMB -->

            <div class="row">
                <div id="flLoginForm" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area" style="padding: 20px;position: relative;background-color: #0e1726;border-bottom-left-radius: 8px;border-bottom-right-radius: 8px;border: none;">
                            <form action="<?php echo e(route('admin.sop.update', $data->id)); ?>" method="POST" enctype="multipart/form-data" class="row g-3">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('put'); ?>
                                <div class="col-md-12">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="judul" value="<?php echo e($data->judul); ?>">
                                </div>
                                <div class="col-md-12">
                                    <label for="dokumen_terkini" class="form-label fw-bold">Standar Layanan Operasional Terkini</label>
                                    <p class="fw-bold"><?php echo e($data->file); ?></p>
                                </div>
                                <div class="form-group mb-4 mt-3">
                                    <label for="exampleFormControlFile1">Update File SOP Terbaru</label>
                                    <input type="hidden" name="filelama" value=<?php echo e($data->file); ?>>
                                    <input type="file" class="form-control-file <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="file" id="exampleFormControlFile1">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="/admin/sop" class="btn btn-gray">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/be/sop/edit.blade.php ENDPATH**/ ?>