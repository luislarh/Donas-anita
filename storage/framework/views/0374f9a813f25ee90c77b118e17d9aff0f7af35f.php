

<?php $__env->startSection('content'); ?>
<div class="container bg-success pb-5">
    <div class="row">
        <h1 class="p-2 mt-5 text-white w-100 text-center"><?php echo e($post->nombre); ?></h1>
        <img src="/img/post/<?php echo e($post->urlfoto); ?>" class=" mx-auto d-block" width="900" height="450">

        
    </div>
    <div class="col-sm-12 p-5 mt-5 mb-5 bg-white rounded-lg">
        <?php echo $post->descripcion; ?>

        <hr>

        <p class="small text-right">Leido <?php echo e($post->visitas); ?> veces | Publicado <?php echo e($post->created_at->diffForHumans()); ?></p>
    </div>

    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appfront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\donas\resources\views/front/post.blade.php ENDPATH**/ ?>