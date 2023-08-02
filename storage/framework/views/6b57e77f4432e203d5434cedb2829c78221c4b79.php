

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <?php echo $__env->make('admin.submenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-sm-10">
            <a href="<?php echo e(route('carrucel.create')); ?>" class="btn btn-primary">NUEVO</a>
            <table class="table table-striped">
                <thead>
                    <th>Orden</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $carrucels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($item->orden); ?></td>
                            <td><img src="/img/carrucel/<?php echo e($item->urlfoto); ?>" width="300"></td>
                            <td>
                                
                                
                                <?php echo Form::open(['method'=>'DELETE', 'route'=>['carrucel.destroy', $item->id], 'style'=>'display:inline']); ?>

                                <?php echo Form::submit('ELIMINAR', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("¿ESTA SEGURO DE ELIMINAR?")']); ?>

                                <?php echo Form::close(); ?>

                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        
                    <?php endif; ?>
                </tbody>


            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\donas\resources\views/admin/carrucel/index.blade.php ENDPATH**/ ?>