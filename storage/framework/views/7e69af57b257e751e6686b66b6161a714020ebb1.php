

<?php $__env->startSection('content'); ?>
<div class="container bg-success">
    <div class="row">
        <img src="/img/configuracion/<?php echo e($config->seo_urlfoto); ?>" class="img-fluid">
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-5 mb-5 text-center">
            <h1 class="text-danger">DONAS</h1>
            <P style="font-family: 'Open Sans', sans-serif; font-size: 1.2rem; color: #333; ">
                ¡Déjate tentar por la dulzura y el placer de nuestras exquisitas creaciones!
            </P>
        </div>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-4 mt-4 mb-4 text-center ">
                <div class="card custom-card">
                    <div class="card-body">
                        <a href="/donas/<?php echo e($r->slug); ?>">
                            <img src="/img/categoria/<?php echo e($r->urlfoto); ?>"   class="card-img-top" >
                        </a>
                    </div>
                    <div class="card-footer">
                        <a href="/donas/<?php echo e($r->slug); ?>" class="text-decoration-none">
                            <h5 class="text-danger"><?php echo e($r->nombre); ?></h5>
                        </a>
                    </div>
                </div>
            </div>



        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 
        

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appfront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\donas\resources\views/front/categorias.blade.php ENDPATH**/ ?>