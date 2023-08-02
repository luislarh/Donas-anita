

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <?php echo $__env->make('admin.submenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-sm-10">

        <?php echo Form::open(['route'=>['categoria.update', $categoria], 'method'=>'PUT', 'files'=>true]); ?>    

        <div class="jumbotron">
            <div class="form-group">
                <label for="title">Ingrese Title</label>
                <?php echo Form::text('title',$categoria->title,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="form-group">
                <label for="description">Ingrese Description</label>
                <?php echo Form::text('description', $categoria->description ,['class'=>'form-control', 'maxlength' =>'155', 'rows'=>'3']); ?>

            </div>
            <div class="form-group">
                <label for="nombre">Ingrese Nombre</label>
                <?php echo Form::text('nombre', $categoria->nombre ,['class'=>'form-control', 'maxlength' =>'100']); ?>

            </div>
            <div class="form-group">
                <label for="descripcion">Ingrese Descripcion</label>
                <?php echo Form::textarea('descripcion', $categoria->descripcion ,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <label for="orden">Ingrese Orden</label>
                <?php echo Form::text('orden', $categoria->orden ,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <label for="urlfoto">Imagen</label> <br>
                <img src="/img/categoria/<?php echo e($categoria->urlfoto); ?>" >
                <?php echo Form::file('urlfoto'); ?>

            </div>
            
        </div>

        <?php echo Form::submit('GUARDAR', ['class'=>'btn btn-success']); ?>



        <?php echo Form::close (); ?>  
  

    
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\donas\resources\views/admin/categoria/edit.blade.php ENDPATH**/ ?>