

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <?php echo $__env->make('admin.submenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-sm-10">

        <?php echo Form::open(['route'=>['carrucel.update', $carrucel], 'method'=>'PUT', 'files'=>true]); ?>    

        <div class="jumbotron">
            
            <div class="form-group">
                <label for="descripcion">Ingrese Descripcion</label>
                <?php echo Form::text('descripcion', $carrucel->descripcion ,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>

            <div class="form-group">
                <label for="link">Ingrese Link</label>
                <?php echo Form::text('link', $carrucel->link ,['class'=>'form-control']); ?>

            </div>

            <div class="form-group">
                <label for="orden">Ingrese Orden</label>
                <?php echo Form::text('orden', $carrucel->orden ,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <label for="urlfoto">Imagen</label> <br>
                <img src="/img/carrucel/<?php echo e($carrucel->urlfoto); ?>" >
                <?php echo Form::file('urlfoto'); ?>

            </div>
            
        </div>

        <?php echo Form::submit('GUARDAR', ['class'=>'btn btn-success']); ?>



        <?php echo Form::close (); ?>  
  

    
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\donas\resources\views/admin/carrucel/edit.blade.php ENDPATH**/ ?>