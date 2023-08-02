<?php $__env->startSection('content'); ?>

<div class="container-fluid p-0">
    <div id="carouselExampleRide" class="carousel slide"  data-bs-ride="true">
        <div class="carousel-indicators">
            <?php $__empty_1 = true; $__currentLoopData = $carrucel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="<?php echo e($item->orden); ?>" class="<?php if($loop->index==0): ?> active <?php endif; ?>" aria-current="true" aria-label="Slide 1"></button>
           
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                
            <?php endif; ?>
          
        </div>
        <div class="carousel-inner">
        <?php $__empty_1 = true; $__currentLoopData = $carrucel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <div class="carousel-item <?php if($loop->index==0): ?> active <?php endif; ?>">
            <img src="/img/carrucel/<?php echo e($item->urlfoto); ?>" class="d-block w-100" alt="<?php echo e($item->descripcion); ?>">
            <div class="carousel-caption d-none d-md-block pb-5">
              <h5><?php echo e($item->descripcion); ?></h5>
              <a href="<?php echo e($item->link); ?>" class="btn btn-danger">VER MÁS</a>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                
        <?php endif; ?>
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<div class="container-fluid bg-success">
    <h1 class=" pb-5 pt-5 mb-5 text-white text-center"><?php echo e($config->slogan); ?></h1>
    <div class="container pb-1">
      <div class="row mt-5 mb-5 justify-content-center text-center text-center lead text-white">
        
        <div class="col-sm-3"><p><?php echo e($config->frase_1); ?></p></div>
        <div class="col-sm-3"><p><?php echo e($config->frase_2); ?></p></div>
        <div class="col-sm-3"><p><?php echo e($config->frase_3); ?></p></div>  

        <div class="col-sm-12 text-center mt-5">
          <a href="/donas" class="btn btn-outline-danger rounded-pill">VER DONAS</a>
        </div>
      </div>
    </div>
</div>



<div class="container">
  <div class="row mt-5 mb-5   justify-content-center text-center">
    <div class="col-sm-8 bg-light pt-5 pb-5">
      <div class="row">
      <div class="col-sm-12">
        <h2>PRODUCTOS MÁS DEMANDADOS</h2>
      </div>
      
      <?php $__empty_1 = true; $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      
       <div class="col-sm-4">
        <div class="card">
          <a href="/donas/<?php echo e($item->categoria->slug); ?>/<?php echo e($item->slug); ?>">
            <img src="/img/producto/<?php echo e($item->urlfoto); ?>" class="card-img-top" alt="<?php echo e($item->nombre); ?>" width="150" height="180">
          </a>
        </div>
        <div class="card-footer">
          <a href="/donas/<?php echo e($item->categoria->slug); ?>/<?php echo e($item->slug); ?>" class="btn btn-outline-dark rounded-pill btn-block"><?php echo e($item->nombre); ?></a>
        </div>
        
       </div>
       
      
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

      <?php endif; ?>
    </div>
  </div>
  <div class="col-sm-4 bg pt-5 pb-5">
    <h1 class="fw-bold text-white">CONTACTO INMEDIATO</h1>
    <h1 class="fw-bold text-white">WhatsApp</h1>
    <h4 class="display-4"><?php echo e($config->celular); ?></h4>
    <a href="https://wa.me/4171067484/?text=Quiero%20comprar%20donas" class="btn  btn-outline-success rounded-pill">Enviar Mensaje</a>
  </div>
</div>
</div>
<!--Donas -->

<!--Publicaciones -->
<div class="container">
  <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <div class="card mb-3" style="max-width: 1000px;">
      <div class="row g-0 d-flex align-items-center">
          <div class="col-md-4">
              <img src="/img/post/<?php echo e($r->urlfoto); ?>" class="img-fluid rounded-start img-thumbnail" alt="<?php echo e($r->nombre); ?>" width="200">
          </div>
          <div class="col-md-7 bg-light">
              <div class="card-body text-center">
                  <h3 class="card-title text-danger"><?php echo e($r->nombre); ?></h3>
                  <p class="card-text"><?php echo e($r->description); ?></p>
                  <p class="card-text"><small class="text-body-secondary"><?php echo e($r->created_at->diffForHumans()); ?></small></p>
              </div>
          </div>
      </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <!-- Código para mostrar algo en caso de que no haya registros -->
  <?php endif; ?>
</div>

<!--FIN Publicaciones -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appfront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\donas\resources\views/welcome.blade.php ENDPATH**/ ?>