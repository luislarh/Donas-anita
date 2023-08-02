

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <?php echo $__env->make('admin.submenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-sm-10">

        <?php echo Form::open(['route'=>['configuracion.update', $registro], 'method'=>'PUT', 'files'=>true]); ?>    

        <div class="jumbotron">
            <div class="form-group">
                <label for="">Ingrese Title</label>
                <?php echo Form::text('seo_title', $registro->seo_title,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="form-group">
                <label for="">Ingrese Description</label>
                <?php echo Form::textarea('seo_description', $registro->seo_description,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="form-group">
                <label for="">Imagen Destacada</label> <br>
                <img src="/img/configuracion/<?php echo e($registro->seo_urlfoto); ?>" >
                <?php echo Form::file('seo_urlfoto'); ?>

            </div>
        </div> 

        <div class="form-group row">
                <div class="col-sm-3">
                <label for="">Color Primario</label>
                <?php echo Form::text('coloPrimario', $registro->coloPrimario,['class'=>'form-control', 'maxlength' =>'67']); ?>

                </div>
            
                <div class="col-sm-9">
                    <label for="">Favicon</label>
                    <img src="/img/configuracion/<?php echo e($registro->urlfavicon); ?>">
                    <?php echo Form::file('urlfavicon'); ?>

                </div>

                <div class="col-sm-3">
                <label for="">Color Secundario</label>
                <?php echo Form::text('colorSecundario', $registro->colorSecundario,['class'=>'form-control', 'maxlength' =>'67']); ?>

                </div>
            
            
                <div class="col-sm-9">
                <label for="">Logo</label>
                <img src="/img/configuracion/<?php echo e($registro->urllogo); ?>">
                <?php echo Form::file('urllogo'); ?>

                </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <label for="">Slogan</label>
                <?php echo Form::text('slogan', $registro->slogan,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="col-sm-6">
                <label for="">Frase 1</label>
                <?php echo Form::text('frase_1', $registro->frase_1,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="col-sm-6">
                <label for="">Frase 2</label>
                <?php echo Form::text('frase_2', $registro->frase_2,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="col-sm-6">
                <label for="">Frase 3</label>
                <?php echo Form::text('frase_3', $registro->frase_3,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
        </div>

        <div class="form-group row">
        
            <div class="col-sm-3">
                <label for="">Razon Social</label>
                <?php echo Form::text('razonsocial', $registro->razonsocial,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="col-sm-3">
                <label for="">Direccion</label>
                <?php echo Form::text('direccion', $registro->direccion,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="col-sm-3">
                <label for="">Celular</label>
                <?php echo Form::text('celular', $registro->celular,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="col-sm-3">
                <label for="">Email</label>
                <?php echo Form::text('email', $registro->email,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="col-sm-3">
                <label for="">Facebook</label>
                <?php echo Form::text('facebook', $registro->facebook,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
            <div class="col-sm-3">
                <label for="">Whatsapp</label>
                <?php echo Form::text('whatsapp', $registro->whatsapp,['class'=>'form-control', 'maxlength' =>'67']); ?>

            </div>
        </div>



        <?php echo Form::submit('GUARDAR', ['class'=>'btn btn-success']); ?>



        <?php echo Form::close (); ?>  
  

    
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\donas\resources\views/admin/configuracion/index.blade.php ENDPATH**/ ?>