<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img
            class="img-xs rounded-circle"
            src="admin/images/faces/face8.jpg"
            alt="profile image"
          />
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name"><?php echo e(Auth::user()->name); ?></p>
          <p class="designation">Administrator</p>
        </div>
        <div class="icon-container">
          <i class="icon-bubbles"></i>
          <div class="dot-indicator bg-danger"></div>
        </div>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Dashboard Section</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <span class="menu-title">Dashboard</span>
        <i class="icon-screen-desktop menu-icon"></i>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">UI Elements Section</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('/users')); ?>">
        <span class="menu-title">Users</span>
        <i class="icon-layers menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(url('/foodmenu')); ?>">
        <span class="menu-title">Food Menu</span>
        <i class="icon-globe menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/forms/basic_elements.html">
        <span class="menu-title">Chefs</span>
        <i class="icon-book-open menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/charts/chartist.html">
        <span class="menu-title">Reservations</span>
        <i class="icon-chart menu-icon"></i>
      </a>
    </li>

    <li class="nav-item nav-category">
      <span class="nav-link">Sample Pages Section</span>
    </li>
    <li class="nav-item">
      <a
        class="nav-link"
        data-toggle="collapse"
        href="#auth"
        aria-expanded="false"
        aria-controls="auth"
      >
        <span class="menu-title">General Pages</span>
        <i class="icon-doc menu-icon"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="admin/pages/samples/login.html">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/pages/samples/register.html">
              Register
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/pages/samples/error-404.html">
              404
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/pages/samples/error-500.html">
              500
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/pages/samples/blank-page.html">
              Blank Page
            </a>
          </li>
        </ul>
      </div>
    </li>
    
  </ul>
</nav>
<?php /**PATH E:\My Work\web\Resturent-Site\resources\views\admin\partials\sidebar.blade.php ENDPATH**/ ?>