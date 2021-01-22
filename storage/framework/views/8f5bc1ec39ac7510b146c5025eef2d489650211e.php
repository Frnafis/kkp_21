<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div style="background-color: white" class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <!-- Logo -->
                        <div class="col-xl-11 col-lg-11 col-md-11 d-none d-md-block">
                            <div class="logo">
                                <a href="<?php echo e(url('/')); ?>">
                                    <img src="<?php echo e(asset('assets/img/logo/LOGOJDI.jpg')); ?>" alt="" width="150">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color: #1A3059;border-top:15px solid #F9B501" class="header-bottom header-sticky">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-11 col-lg-11 col-md-11 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <h1 class="text-white">LOGO</h1>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation" class="d-flex bd-highlight">
                                        <li class="bd-highlight">
                                            <a class="<?php echo e((Request::url() === url('/')) ? 'menu-active' : ''); ?>" href="<?php echo e(url('/')); ?>">Beranda</a>
                                        </li>
                                        <li class="bd-highlight">
                                            <a class="<?php echo e((Request::url() === url('/category')) ? 'menu-active' : ''); ?>" href="<?php echo e(route('category')); ?>">Kategori</a>
                                        </li>
                                        <li class="bd-highlight">
                                            <a class="<?php echo e((Request::url() === url('/archive/news')) ? 'menu-active' : ''); ?>" href="<?php echo e(route('archive.news')); ?>">Arsip Terbaru</a>
                                        </li>
                                        <li class="bd-highlight">
                                            <a class="<?php echo e((Request::url() === url('/archive/popular')) ? 'menu-active' : ''); ?>" href="<?php echo e(route('archive.popular')); ?>">Arsip Terpopuler</a>
                                        </li>
                                        <li class="bd-highlight"></li>
                                        <?php if(auth()->guard()->guest()): ?>
                                        <li class="ml-auto bd-highlight"><a href="<?php echo e(route('login')); ?>"><span class="fa fa-sign-in-alt"></span> Sign In</a></li>
                                        <?php else: ?>
                                        <li class="ml-auto bd-highlight">
                                            <a href="#"><?php echo e(\Auth::user()->name); ?>&nbsp;</a>
                                            <ul class="submenu">
                                                <?php if(\Auth::user()->role == "admin"): ?>
                                                    <li><a href="<?php echo e(route('home')); ?>">Dashboard</a></li>
                                                <?php endif; ?>
                                                <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">Sign Out</a>
                                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                    <?php echo csrf_field(); ?>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<style type="text/css">
    #navigation li a:hover {
        color: #222831;
    }

    #navigation li .menu-active {
        color: #222831;
    }
</style>
<?php /**PATH /home/mussafi/Laravel/web_arsip/resources/views/core/layouts/header.blade.php ENDPATH**/ ?>