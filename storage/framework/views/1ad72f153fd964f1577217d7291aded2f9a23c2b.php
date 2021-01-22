<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Favico -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>">
  <?php echo $__env->yieldContent('title'); ?>
  
  <?php echo $__env->make('dashboard.dev.link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php echo $__env->make('dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- partial -->
    <div class="container-fluid mt-5">
      <div class="row row-offcanvas row-offcanvas-right">
        
        <!-- Sidebar -->
        <?php echo $__env->make('dashboard.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Sidebar -->

        <!-- Content -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- End Content -->

        <!-- Footer -->
        <?php echo $__env->make('dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Footer -->

        <!-- partial -->
      </div>
    </div>

  </div>


  <?php echo $__env->make('dashboard.dev.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</body>

</html>
<div class="modal fade" id="signOutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Sign Out</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin ingin keluar ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?php echo e(route('logout')); ?>" class="btn btn-danger" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Sign Out</a>
      </div>
    </div>
  </div>
</div>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
</form><?php /**PATH /home/mussafi/Laravel/web_arsip/resources/views/dashboard/layouts/app.blade.php ENDPATH**/ ?>