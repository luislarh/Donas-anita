

<?php $__env->startSection('content'); ?>
<div class="container bg-success pb-5">
    <div class="row">
        <h1 class="p-2 mt-5 text-white"><?php echo e($categoria->nombre); ?></h1>
        <img src="/img/categoria/<?php echo e($categoria->urlfoto); ?>" width="1200" height="400">
    </div>

    
        <?php $__empty_1 = true; $__currentLoopData = $categoria->Producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="row  m-5 bg-white p-3 rounded-lg">
            <div class="col-sm-12">
                <h2 class="text-danger h4"><?php echo e($r->nombre); ?></h2>
            </div>
            <div class="row align-items-center bg-light">
                <div class="col-sm-4">
                    <img src="/img/producto/<?php echo e($r->urlfoto); ?>" class="img-fluid rounded-lg" width="500" height="350">
                </div>
                <div class="col-sm-8  rounded-lg">
                    <p><?php echo e($r->description); ?></p>
                    <div class="text-right">
                        <a href="/donas/<?php echo e($categoria->slug); ?>/<?php echo e($r->slug); ?>" class="btn btn-outline-dark rounded-pill pr-5 pl-5">AMPLIAR</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            
        <?php endif; ?>
    

        

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appfront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\donas\resources\views/front/categoria.blade.php ENDPATH**/ ?>