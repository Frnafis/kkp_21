<?php $__env->startSection('title'); ?>
<title>Daftar Mahasiswa | DASHBOARD - BLOG</title>

<?php $__env->startSection('content'); ?>
<div style="min-height: 120vh" class="content-wrapper">
  <h3 class="page-heading mb-4">Daftar Mahasiswa</h3>
  <div class="row mb-5">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Ubah Pengguna Mahasiswa</h5>
          <form class="row" action="<?php echo e(route('users.student.store')); ?>" method="POST">
          <?php echo csrf_field(); ?>
            <div class="form-group col-md-12">
              <label for="name">Fullname</label>
              <input type="name" value="<?php echo e($user->name); ?>" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
            </div>
            <div class="form-group col-md-12">
              <label for="email">Email</label>
              <input type="email" value="<?php echo e($user->email); ?>" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="password">Enter Your Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>
            <div class="form-group col-md-12 mt-3 mb-0">
              <button type="submit" class="btn btn-primary float-right">Submit</button>
              <a href="<?php echo e(route('users.student')); ?>" class="btn btn-secondary float-right mr-3">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mussafi/Laravel/web_arsip/resources/views/dashboard/component/users/student/edit.blade.php ENDPATH**/ ?>