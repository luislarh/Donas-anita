

<?php $__env->startSection('content'); ?>
<div class="container bg-success">
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-5 mb-5 text-center">
            <h1 class="text-danger">BLOG</h1>
            <P class="h5" >
                Descubre las últimas noticias, recetas y curiosidades sobre el delicioso mundo de las donas.
            </P>
        </div>
    </div>

    <div class="row  pb-5">
        <div class="timeline p-5">
            <ul>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="content">
                        <h2 class="h4 "><a href="/blog/<?php echo e($r->slug); ?>" class="text-danger text-decoration-none bg-white d-inline-flex align-items-center"><?php echo e($r->nombre); ?></a></h2>
                        <p class="text-white  text-justify" style=" font-size: 1.25rem;"><?php echo e($r->description); ?></p>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>

 
        

</div>
<style>
    .timeline{
        margin-top: 60px;
        
    }
    .timeline:before{
        content: '';
        position: absolute;
        left: 50%;
        width: 2px;
        height: 100%;
        background: #f79aae;

    }
    .timeline ul{
        margin: 0;
        padding: 0;
    }
    .timeline ul li{
        list-style: none;
        position: relative;
        width:50%;
        padding: 40px;
        box-sizing: border-box; 
    }
    .timeline ul li:nth-child(odd){
        float: left;
        text-align: right;
        clear: both;
       
    }
    .timeline ul li:nth-child(even){
        float: right;
        text-align: left;
        clear: both;
        
    }
    .timeline ul li:nth-child(odd)::before{
        content: '';
        position: absolute;
        top: 40px;
        right: -10px;
        width: 20px;
        height: 20px;
        background: black;
        border-radius: 50%;
    }
    .timeline ul li:nth-child(even)::before{
        content: '';
        position: absolute;
        top: 40px;
        left: -10px;
        width: 20px;
        height: 20px;
        background: black;
        border-radius: 50%;
    }

</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appfront', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\donas\resources\views/front/posts.blade.php ENDPATH**/ ?>