<?php $__env->startSection('title'); ?>
<title>Kategori Arsip | BLOG</title>
<?php $__env->startSection('content'); ?>
<main>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Daftar Kategori</h1>
                <hr>
                <div class="row category">
                    <div class="col-md-4 mt-2 my-2">
                        <div class="card">
                          <img src="<?php echo e(url('https://www.hadsystem.com/wp-content/uploads/2020/01/Bidang-Bidang-Akuntansi-Dan-Penjelasannya.jpg')); ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="<?php echo e(route('category.akutansi')); ?>">
                                <h5 class="card-title">Akuntansi</h5>
                            </a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 my-2">
                        <div class="card">
                          <img src="<?php echo e(url('https://i0.wp.com/hulondalo.id/wp-content/uploads/2020/04/ekonomi.jpg?fit=1366%2C768&ssl=1')); ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="<?php echo e(route('category.ekonomi')); ?>">
                                <h5 class="card-title">Ekonomi</h5>
                            </a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 my-2">
                        <div class="card">
                          <img src="<?php echo e(url('https://rencanamu.id/assets/file_uploaded/blog/1455272524-chemical-e.jpg')); ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="<?php echo e(route('category.kimia')); ?>">
                                <h5 class="card-title">Kimia</h5>
                            </a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 my-2">
                        <div class="card">
                          <img src="<?php echo e(url('https://www.inanews.co.id/wp-content/uploads/2020/06/images-15-678x430.jpeg')); ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="<?php echo e(route('category.hukum')); ?>">
                                <h5 class="card-title">Hukum</h5>
                            </a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 my-2">
                        <div class="card">
                          <img src="<?php echo e(url('https://www.its.ac.id/wp-content/uploads/2019/06/1-9-768x512.jpg')); ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="<?php echo e(route('category.elektro')); ?>">
                                <h5 class="card-title">Elektro</h5>
                            </a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2 my-2">
                        <div class="card">
                          <img src="<?php echo e(url('https://mesin.akprind.ac.id/wp-content/uploads/2020/06/fVApGU.jpg')); ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="<?php echo e(route('category.mesin')); ?>">
                                <h5 class="card-title">Mesin</h5>
                            </a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<style type="text/css">
    .category .card {
        border-radius: 10px;
    }

    .category .card img {
        width: 100%;
        height: 240px;
        border-radius: 10px 10px 0 0;
    }


    .category .card:hover {
        transition: 0.3s;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-color: #fafafa;
    }

    .category .card .card-body a h5:hover{
        transition: 0.3s;
        color: #00adb5;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('core.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mussafi/Laravel/web_arsip/resources/views/core/component/category/index.blade.php ENDPATH**/ ?>