<?php $__env->startSection('content'); ?>
<?php
    use Illuminate\Support\Str;
?>
<div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">
                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin">Master Data</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pesan Kontak Kami</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    
    
                    <div class="row layout-spacing">
                        <div class="col-lg-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="style-3" class="table style-3 dt-table-hover">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column text-center"> Record Id </th>
                                                <th class="text-center">Nama Pengirim Pesan</th>
                                                <th class="text-center">Email Pengirim Pesan</th>
                                                <th class="text-center">Pesan</th>
                                                <th class="text-center dt-no-sorting">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $pesan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="checkbox-column text-center"> <?php echo e($loop->iteration); ?> </td>
                                                <td><?php echo e($p->nama); ?></td>
                                                <td><?php echo e($p->email); ?></td>
                                                <td><?php echo e($p->pesan); ?></td>
                                                <td><?php echo e($p->created_at->format('d-m-Y')); ?></td>
                                                <td class="text-center">
                                                    <ul class="table-controls d-flex justify-content-center" style="list-style:none; padding:0; margin:0;">
                                                        <li>
                                                            <form action="<?php echo e(route('admin.pesan.destroy', $p->id)); ?>" 
                                                                method="POST" 
                                                                onsubmit="return confirm('Yakin ingin menghapus klasifikasi ini?')" 
                                                                style="display:inline;">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <a href="<?php echo e(route('admin.pesan.edit', $p->id)); ?>" 
                                                                    class="bs-tooltip" 
                                                                    data-bs-toggle="tooltip" 
                                                                    data-bs-placement="top" 
                                                                    title="Edit">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                                            class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                        </svg>
                                                                </a>
                                                                <button type="submit" 
                                                                        class="btn btn-link p-0 m-0 align-baseline bs-tooltip" 
                                                                        data-bs-toggle="tooltip" 
                                                                        data-bs-placement="top" 
                                                                        title="Delete"
                                                                        style="border:none; background:none; cursor:pointer;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                                        class="feather feather-trash p-1 br-8 mb-1 text-danger">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6
                                                                                m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    </svg>
                                                                </button>
                                                            </form>

                                                        </li>
                                                    </ul>
                                                </td>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('be.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/be/kontakkami/home.blade.php ENDPATH**/ ?>