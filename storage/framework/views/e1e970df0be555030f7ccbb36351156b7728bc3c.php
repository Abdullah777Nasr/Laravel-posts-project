    <!-- Page Header -->
<header class="masthead" style="background-image: url(<?php echo e(asset('img/home-bg.jpg')); ?>)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>
<?php $__env->startSection('content'); ?>
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
         <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="post-preview">
              <a href="post">
                <h2 class="post-title">
                  <?php echo e($post->post_title); ?>

                </h2>
                  <img src="img/<?php echo e($post->image_name); ?>" class="img-fluid w-25 h-25" >
                <h3 class="post-subtitle">
                  <?php echo $post->post_content; ?>


                </h3>
              </a>
              <p class="post-meta">Posted by
                <a href="#"> <?php echo e($post->writer_name); ?></a>
                on<?php echo e($post->created_at); ?></p>
            </div>
            <a href="/index/<?php echo e($post->id); ?>/delete"> Delete </a>
            <a href="/index/<?php echo e($post->id); ?>/edit"> Edit </a>
            <hr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>