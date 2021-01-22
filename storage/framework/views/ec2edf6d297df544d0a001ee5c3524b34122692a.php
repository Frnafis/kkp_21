<?php $__env->startSection('title'); ?>
    <?php if($stat): ?>
        <title>  <?php echo e($arsip->judul); ?> | Jaringan Dokumentasi & Informasi</title>
    <?php else: ?>
        <title>  403 Forbidden | Jaringan Dokumentasi & Informasi</title>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="trending-area fix pt-50 pb-20 gray-bg">
        <div style="min-height: 450px" class="container">
            <div class="trending-main">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <!-- Trending Top -->
                        <div class="row" style="margin-top:10px;">
                            <?php if($stat): ?>
                                <div class="col-md-8 mb-4">
                                    <center>
                                        <img style="width: 300px;border-radius:10px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" src="<?php echo e(asset('assets/arsip/thumbnail/'.pathinfo($arsip->dokumen,PATHINFO_FILENAME).'.jpg')); ?>" class="img-fluid">
                                    </center>
                                    <h2 style="margin-top:30px;"><?php echo e($arsip->judul); ?></h2>
                                    <p style="margin-top:20px;margin-bottom:30px;"><?php echo e($arsip->deskripsi); ?></p>
                                    <div class="row">
                                        <a href="<?php echo e(route('archive.download',$arsip->dokumen)); ?>" class='btn-primary btn-lg' style="margin-left:12px;"><i class="fas fa-download" style="margin-right:2px;"></i> Download</a>
                                        <a href="<?php echo e(asset('assets/arsip/'.$arsip->dokumen)); ?>" class="btn-success btn-lg" style="margin-left:7px;" target="__blank"> <i class="fas fa-search" style="margin-right:2px;"></i> Preview</a>
                                    </div>
                                    <br>
                                    <div style="margin-top:30px;">
                                        <span style="display:inline;"><?php echo e($arsip->created_at->format("F d, Y")); ?></span>
                                        <p style="float:right;"><i class="fas fa-eye" style="margin-right:5px;"></i>  <?php echo e($arsip->dilihat); ?></p>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="col-md-8">
                                    <h2 class="display-1 mb-0 text-primary font-weight-bold">403 Forbidden</h2  >
                                    <h4 class="mb-4 mt-4">Anda Harus Login Terlebih Dahulu Untuk Menampilkan Arsip.</h4>
                                    <a class="btn mt-3 btn-lg" href="<?php echo e(url('/')); ?>" style="border-radius:7px;">Back to home</a>
                                </div>
                            <?php endif; ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body mb-0">
                                        <h5 class="card-title text-center">Kategori Arsip</h5>
                                    </div>
                                    <ul style="display: inline-block; height: 275px; overflow-y: auto;" class="list-group list-group-flush">
                                    <li class="list-group-item"><a class="text-dark" href="<?php echo e(route('category.akutansi')); ?>">Akutansi</a></li>
                                    <li class="list-group-item"><a class="text-dark" href="<?php echo e(route('category.ekonomi')); ?>">Ekonomi</a></li>
                                    <li class="list-group-item"><a class="text-dark" href="<?php echo e(route('category.kimia')); ?>">Kimia</a></li>
                                    <li class="list-group-item"><a class="text-dark" href="<?php echo e(route('category.hukum')); ?>">Hukum</a></li>
                                    <li class="list-group-item"><a class="text-dark" href="<?php echo e(route('category.elektro')); ?>">Elektro</a></li>
                                    <li class="list-group-item"><a class="text-dark" href="<?php echo e(route('category.mesin')); ?>">Mesin</a></li>
                                    </ul>
                                    <div class="card-body mb-0">
                                        <center>
                                            <a href="<?php echo e(route('category')); ?>" class="card-link text-primary text-center">Kategori Lain ...</a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mussafi/Laravel/web_arsip/resources/views/core/component/archive/content/index.blade.php ENDPATH**/ ?>