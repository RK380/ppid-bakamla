<?php $__env->startSection('content'); ?>
<div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/pesan">Form</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Data Detail Pesan Masuk</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                        <form>
                                            <div class="container">
                                            <div class="form-group mb-4">
                                                <label for="exampleFormControlInput2">Nama</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" value="<?php echo e($message->nama); ?>" disabled>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="exampleFormControlInput2">Email</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput2" value="<?php echo e($message->email); ?>" disabled>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="exampleFormControlTextarea1">Pesan Masuk</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?php echo e(old('pesan', $message->pesan)); ?></textarea>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="col-sm-2">
                                                    <p style="font-weight: 500;
                                                    font-size: 14px;
                                                    padding: 4px 6px 4px 6px;
                                                    background: #3b3f5c;
                                                    border-radius: 10px;
                                                    color: #bfc9d4;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> <small><?php echo e($message->created_at->diffForHumans()); ?></small></p>
                                                    <a href="/pesan" class="mt-4 mb-4 btn btn-primary">Kembali</a>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>

                </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('be.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/be/kontakkami/show.blade.php ENDPATH**/ ?>