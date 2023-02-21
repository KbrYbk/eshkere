

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3">
                <div class="row">
                    <div class="col-4">
                        <div class="card-header">
                            <img src="<?php echo e($pp->img); ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h1 class="mx-5"><?php echo e($pp->fio); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/fvfueztk/bysfnbn-m1/resources/views/studenty93.blade.php ENDPATH**/ ?>