<?php $__env->startSection('title'); ?>
<title>Daftar Mahasiswa | DASHBOARD - BLOG</title>

<?php $__env->startSection('content'); ?>
<div style="min-height: 120vh" class="content-wrapper">
  <h3 class="page-heading mb-4">Daftar Mahasiswa</h3>
  <div class="row mb-5">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-4"><a href="<?php echo e(route('users.student.create')); ?>" class="btn btn-success text-white float-right">Tambah Pengguna Mahasiswa</a>
          <h3>Tabel Daftar Mahasiswa</h3>
          </div>
          <div class="table-responsive">
            <table class="table center-aligned-table" style="width: 100%;">
              <thead>
                <tr class="text-primary">
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th colspan="2" class="text-center">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($u->name); ?></td>
                        <td><?php echo e($u->email); ?></td>
                        <td><a href="<?php echo e(route('users.student.edit', $u->id)); ?>" class="btn btn-primary btn-sm">Manage</a></td>
                        <td><a href="<?php echo e(route('users.student.delete',$u->id)); ?>" class="btn btn-danger btn-sm">Remove</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mussafi/Laravel/web_arsip/resources/views/dashboard/component/users/student/index.blade.php ENDPATH**/ ?>