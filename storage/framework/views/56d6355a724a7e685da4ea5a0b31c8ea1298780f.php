

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <?php echo $__env->make('admin.submenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-sm-10">

        <?php echo Form::open(['route'=>['empresa.update', $empresa], 'method'=>'PUT', 'files'=>true]); ?>    

        <div class="jumbotron">
            <div class="form-group">
                <label for="title">Ingrese Title</label>
                <?php echo Form::text('title',$empresa->title,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="form-group">
                <label for="description">Ingrese Description</label>
                <?php echo Form::textarea('description', $empresa->description ,['class'=>'form-control', 'maxlength' =>'155', 'rows'=>'3']); ?>

            </div>
            <div class="form-group">
                <label for="somos">SOMOS</label>
                <?php echo Form::textarea('somos', $empresa->somos ,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <label for="urlsomos">Imagen somos</label> <br>
                <img src="/img/empresa/<?php echo e($empresa->urlsomos); ?>" >
                <?php echo Form::file('urlsomos'); ?>

            </div>

            <div class="form-group">
                <label for="historia">HISTORIA</label>
                <?php echo Form::textarea('historia', $empresa->historia ,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <label for="urlhistoria">Imagen Historia</label> <br>
                <img src="/img/empresa/<?php echo e($empresa->urlhistoria); ?>" >
                <?php echo Form::file('urlhistoria'); ?>

            </div>
            <div class="form-group">
                <label for="mision">MISION</label>
                <?php echo Form::textarea('mision', $empresa->mision ,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <label for="urlmision">Imagen Misión</label> <br>
                <img src="/img/empresa/<?php echo e($empresa->urlmision); ?>" >
                <?php echo Form::file('urlmision'); ?>

            </div>
            <div class="form-group">
                <label for="vision">VISION</label>
                <?php echo Form::textarea('vision', $empresa->vision ,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <label for="urlvision">Imagen Visión</label> <br>
                <img src="/img/empresa/<?php echo e($empresa->urlvision); ?>" >
                <?php echo Form::file('urlvision'); ?>

            </div>
            <div class="form-group">
                <label for="valores">VALORES</label>
                <?php echo Form::textarea('valores', $empresa->valores ,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <label for="urlvalores">Imagen Valores</label> <br>
                <img src="/img/empresa/<?php echo e($empresa->urlvalores); ?>" >
                <?php echo Form::file('urlvalores'); ?>

            </div>
            
        </div>

        <?php echo Form::submit('GUARDAR', ['class'=>'btn btn-success']); ?>



        <?php echo Form::close (); ?>  
  

    
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'somos' );
</script>
<script>
    CKEDITOR.replace( 'historia' );
</script>
<script>
    CKEDITOR.replace( 'mision' );
</script>
<script>
    CKEDITOR.replace( 'vision' );
</script>
<script>
    CKEDITOR.replace( 'valores' );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\donas\resources\views/admin/empresa/index.blade.php ENDPATH**/ ?>