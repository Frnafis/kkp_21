<nav class="navbar bg-info col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="bg-white text-center navbar-brand-wrapper pt-1">
    <a class="navbar-brand brand-logo text-info" href="<?php echo e(url('/')); ?>"><h1>BLOG</h1></a>
    <a class="navbar-brand brand-logo-mini text-info" href="<?php echo e(url('/')); ?>"><h1>B</h1></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
      <li class="nav-item">
        <a class="nav-link profile-pic" href="#" id="user-action" href="#" data-toggle="modal" data-target="#signOutModal">
          <!-- <img class="rounded-circle" src="<?php echo e(asset('dashboard/images/face.jpg')); ?>" alt=""> -->
          <i class="fa fa-sign-out-alt"></i> SIGN OUT</a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<style type="text/css">
  #user-action{
    font-size: 12pt;
  }
  #user-action:hover{
    color: #FF0017;
  }
  .navbar-toggler-icon:hover{
    cursor: pointer;
  }
</style><?php /**PATH /home/mussafi/Laravel/web_arsip/resources/views/dashboard/layouts/navbar.blade.php ENDPATH**/ ?>