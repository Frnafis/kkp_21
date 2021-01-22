<?php $__env->startSection('dashboard', 'active'); ?>
<?php $__env->startSection('title'); ?>
<title>DASHBOARD - BLOG</title>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <h3 class="page-heading mb-4">Dashboard</h3>
  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <h4 class="text-danger">
                <i class="fas fa-file-archive highlight-icon" aria-hidden="true"></i>
              </h4>
            </div>
            <div class="float-right">
              <p class="card-text text-dark">Arsip</p>
              <h4 class="bold-text"><?php echo e($arsip); ?></h4>
            </div>
          </div>
          <p class="text-muted">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i>Jumlah Arsip
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <h4 class="text-warning">
                <i class="fa fa-chalkboard-teacher highlight-icon" aria-hidden="true"></i>
              </h4>
            </div>
            <div class="float-right">
              <p class="card-text text-dark">Dosen</p>
              <h4 class="bold-text"><?php echo e($dosen); ?></h4>
            </div>
          </div>
          <p class="text-muted">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i>Pengguna Dosen
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <h4 class="text-success">
                <i class="fa fa-user-graduate highlight-icon" aria-hidden="true"></i>
              </h4>
            </div>
            <div class="float-right">
              <p class="card-text text-dark">Mahasiswa</p>
              <h4 class="bold-text"><?php echo e($mahasiswa); ?></h4>
            </div>
          </div>
          <p class="text-muted">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i>Pengguna Mahasiswa
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <h4 class="text-primary">
                <i class="fa fa-user-cog highlight-icon" aria-hidden="true"></i>
              </h4>
            </div>
            <div class="float-right">
              <p class="card-text text-dark">Admin</p>
              <h4 class="bold-text"><?php echo e($admin); ?></h4>
            </div>
          </div>
          <p class="text-muted">
            <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i>Pengguna Admin
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mussafi/Laravel/web_arsip/resources/views/dashboard/home.blade.php ENDPATH**/ ?>