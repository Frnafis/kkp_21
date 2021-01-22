<?php $__env->startSection("arsip", "active"); ?>
<?php $__env->startSection('title'); ?>
<title>Data Arsip | DASHBOARD - BLOG</title>

<?php $__env->startSection('content'); ?>
<div style="min-height: 120vh" class="content-wrapper">
  <h3 class="page-heading mb-4">Data Arsip</h3>
  <div class="row mb-5">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-4"><a href="<?php echo e(route('archive.create')); ?>" class="btn btn-success text-white float-right">Tambah Data Arsip</a>
          <h3>Tabel Data Arsip</h3>
          </div>
          <div class="table-responsive">
            <table class="table center-aligned-table" style="width: 100%;">
              <thead>
                <tr class="text-primary">
                  <th>No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Kategori</th>
                  <th>Tanggal Dibuat</th>
                  <th>Document</th>
                  <th colspan="2" class="text-center">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $arsip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($a->judul); ?></td>
                        <td><?php echo e($a->deskripsi); ?></td>
                        <td><?php echo e($a->kategori); ?></td>
                        <td><?php echo e($a->created_at->format('d F Y')); ?></td>
                        <td align="center">
                            <a href="<?php echo e(asset('assets/arsip/'.$a->dokumen)); ?>" target="_blank">
                                <i class="fa fa-file-archive text-primary"></i>
                            </a>
                        </td>
                        <td><a href="<?php echo e(route('archive.edit',$a->id)); ?>" class="btn btn-primary btn-sm">Manage</a></td>
                        <td><a class="btn btn-danger btn-sm" href="<?php echo e(route('archive.delete', $a->id)); ?>" >Remove</a></td>
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

<?php echo $__env->make('dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mussafi/Laravel/web_arsip/resources/views/dashboard/component/archive/index.blade.php ENDPATH**/ ?>