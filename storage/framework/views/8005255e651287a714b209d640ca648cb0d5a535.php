<!-- partial:partials/_navbar.html -->
<nav
  class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"
>
  <div class="navbar-brand-wrapper d-flex align-items-center">
    <a href="<?php echo e(route('admin.index')); ?>">
      <img src="assets/images/logo/logo2.png" alt="logo" class="logo-dark w-32" />
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
    <h5 class="mb-0 font-weight-medium d-none d-lg-flex">
      Welcome to foodfun admin dashboard!
    </h5>
    <ul class="navbar-nav navbar-nav-right ml-auto">
      <li>
        <a href="<?php echo e(route('index')); ?>" class="bedge-primary bg-amber-500 font-bold p-2.5 rounded text-white" target="_blank">Browse foodfun site</a>
      </li>
      <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
        <a
          class="nav-link dropdown-toggle cursor-pointer"
          id="UserDropdown"
          data-toggle="dropdown"
          aria-expanded="false"
        >
          <?php if($user !== null): ?>
            <?php if($user->img): ?>
            <img
              class="img-xs rounded-circle ml-2 cursor-pointer"
              src="<?php echo e($user->img); ?>"
              alt="Profile image"
            />
            <?php else: ?>
            <i class="cursor-pointer fa-solid fa-user pr-2 rounded-circle text-6xl text-black-50"></i>
            <?php endif; ?>
          <span class="font-weight-normal cursor-pointer"> <?php echo e($user->name); ?> </span>
          <?php else: ?>
          <i class="cursor-pointer fa-solid fa-user pr-2 rounded-circle text-6xl text-black-50"></i>
          <span class="font-weight-normal cursor-pointer"> Guest </span>
          <?php endif; ?>
        </a>
        <div
          class="dropdown-menu dropdown-menu-right navbar-dropdown"
          aria-labelledby="UserDropdown"
        >
          <?php if($user !== null): ?>
          <div class="dropdown-header text-center">
            <?php if($user->img): ?>
            <img
              class="img-md rounded-circle m-auto"
              src="<?php echo e($user->img); ?>"
              alt="Profile image"
            />
            <?php else: ?>
            <i class="cursor-pointer fa-solid fa-user m-0 p-0 rounded-circle text-6xl text-black-50"></i>
            <?php endif; ?>
            <p class="mb-1 mt-3"><?php echo e($user->name); ?></p>
            <p class="font-weight-light text-muted mb-0">
              <?php echo e($user->email); ?>

            </p>
          </div>

          <!-- Account Management -->
          <div class="block px-4 py-2 text-xs text-gray-400">
            <?php echo e(__('Manage Account')); ?>

          </div>

          <a href="<?php echo e(route('profile.show')); ?>"
            class="dropdown-item"
          >
            <i class="dropdown-item-icon icon-user text-primary"></i> <?php echo e(__('Profile')); ?>

          </a>

          <?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
          <a href="<?php echo e(route('api-tokens.index')); ?>">
            <?php echo e(__('API Tokens')); ?>

          </a>
          <?php endif; ?>

          <div class="border-t border-gray-100"></div>

          <!-- Authentication -->
          <form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
            <?php echo csrf_field(); ?>
            <a href="<?php echo e(route('logout')); ?>"
              @click.prevent="$root.submit();"
              class="dropdown-item"
            >
              <i class="dropdown-item-icon icon-power text-primary"></i> <?php echo e(__('Log Out')); ?>

            </a>            
          </form>

          <?php else: ?>
          <a href="<?php echo e(route('login')); ?>"
            class="dropdown-item"
          >
            <i class="dropdown-item-icon icon-user text-primary"></i> Login
          </a>
            <?php if(Route::has('register')): ?>
            <a href="<?php echo e(route('register')); ?>"
              class="dropdown-item"
            >
              <i class="dropdown-item-icon icon-user text-primary"></i> Register
            </a>
            <?php endif; ?>
          <?php endif; ?>

          <div class="py-2"></div>
        </div>
      </li>
    </ul>
    <button
      class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
      type="button"
      data-toggle="offcanvas"
    >
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
<?php /**PATH E:\My Work\web\Resturent-Site\resources\views\admin\partials\navbar.blade.php ENDPATH**/ ?>