<!-- partial:partials/_navbar.html -->
<nav
  class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"
>
  <div class="navbar-brand-wrapper d-flex align-items-center">
    <a class="navbar-brand brand-logo" href="index.html">
      <img src="admin/images/logo.svg" alt="logo" class="logo-dark" />
    </a>
    <a class="navbar-brand brand-logo-mini" href="index.html">
      <img src="admin/images/logo-mini.svg" alt="logo" />
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
    <h5 class="mb-0 font-weight-medium d-none d-lg-flex">
      Welcome stallar dashboard!
    </h5>
    <ul class="navbar-nav navbar-nav-right ml-auto">
      <form class="search-form d-none d-md-block" action="#">
        <i class="icon-magnifier"></i>
        <input
          type="search"
          class="form-control"
          placeholder="Search Here"
          title="Search here"
        />
      </form>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><i class="icon-chart"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a
          class="nav-link count-indicator message-dropdown"
          id="messageDropdown"
          href="#"
          data-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="icon-speech"></i>
          <span class="count">7</span>
        </a>
        <div
          class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
          aria-labelledby="messageDropdown"
        >
          <a class="dropdown-item py-3">
            <p class="mb-0 font-weight-medium float-left">
              You have 7 unread mails
            </p>
            <span class="badge badge-pill badge-primary float-right"
              >View all</span
            >
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img
                src="admin/images/faces/face10.jpg"
                alt="image"
                class="img-sm profile-pic"
              />
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">
                Marian Garner
              </p>
              <p class="font-weight-light small-text">
                The meeting is cancelled
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img
                src="admin/images/faces/face12.jpg"
                alt="image"
                class="img-sm profile-pic"
              />
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">
                David Grey
              </p>
              <p class="font-weight-light small-text">
                The meeting is cancelled
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img
                src="admin/images/faces/face1.jpg"
                alt="image"
                class="img-sm profile-pic"
              />
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">
                Travis Jenkins
              </p>
              <p class="font-weight-light small-text">
                The meeting is cancelled
              </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
        <a
          class="nav-link dropdown-toggle"
          id="UserDropdown"
          href="#"
          data-toggle="dropdown"
          aria-expanded="false"
        >
          @if ($isAdmin === true)
          <img
            class="img-xs rounded-circle ml-2"
            src="admin/images/faces/face8.jpg"
            alt="Profile image"
          />
          <span class="font-weight-normal"> {{ $user->name }} </span>
          @else
          <span class="font-weight-normal"> user </span>
          @endif
        </a>
        <div
          class="dropdown-menu dropdown-menu-right navbar-dropdown"
          aria-labelledby="UserDropdown"
        >
          @if ($isAdmin === true)
          <div class="dropdown-header text-center">
            <img
              class="img-md rounded-circle"
              src="admin/images/faces/face8.jpg"
              alt="Profile image"
            />
            <p class="mb-1 mt-3">{{ $user->name }}</p>
            <p class="font-weight-light text-muted mb-0">
              {{ $user->email }}
            </p>
          </div>
          <a class="dropdown-item"
            ><i class="dropdown-item-icon icon-speech text-primary"></i> Messages
          </a>
          <a class="dropdown-item"
            ><i class="dropdown-item-icon icon-energy text-primary"></i> Activity
          </a>
          <a class="dropdown-item">
            <i class="dropdown-item-icon icon-question text-primary"></i> FAQ
          </a>

          <!-- Account Management -->
          <div class="block px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Account') }}
          </div>

          <a href="{{ route('profile.show') }}"
            class="dropdown-item"
          >
            <i class="dropdown-item-icon icon-user text-primary"></i> {{
            __('Profile') }}
          </a>

          @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
          <a href="{{ route('api-tokens.index') }}">
            {{ __('API Tokens') }}
          </a>
          @endif

          <div class="border-t border-gray-100"></div>

          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <a href="{{ route('logout') }}"
              @click.prevent="$root.submit();"
              class="dropdown-item"
            >
              <i class="dropdown-item-icon icon-power text-primary"></i> {{
              __('Log Out') }}
            </a>            
          </form>

          @else
          <a href="{{ route('login') }}"
            class="dropdown-item"
          >
            <i class="dropdown-item-icon icon-user text-primary"></i> Login
          </a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}"
              class="dropdown-item"
            >
              <i class="dropdown-item-icon icon-user text-primary"></i> Register
            </a>
            @endif
          @endif

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
