<!-- partial:partials/_navbar.html -->
<nav
  class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row"
>
  <div class="navbar-brand-wrapper d-flex align-items-center">
    <a href="{{ route('admin.index') }}">
      <img src="assets/images/logo/logo2.png" alt="logo" class="logo-dark w-32" />
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
    <h5 class="mb-0 font-weight-medium d-none d-lg-flex">
      Welcome to foodfun admin dashboard!
    </h5>
    <ul class="navbar-nav navbar-nav-right ml-auto">
      <li>
        <a href="{{ route('index') }}" class="bedge-primary bg-amber-500 font-bold p-2.5 rounded text-white" target="_blank">Browse foodfun site</a>
      </li>
      <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
        <a
          class="nav-link dropdown-toggle cursor-pointer"
          id="UserDropdown"
          data-toggle="dropdown"
          aria-expanded="false"
        >
          @if ($user !== null)
            @if ($user->img)
            <img
              class="img-xs rounded-circle ml-2 cursor-pointer"
              src="{{ $user->img }}"
              alt="Profile image"
            />
            @else
            <i class="cursor-pointer fa-solid fa-user pr-2 rounded-circle text-6xl text-black-50"></i>
            @endif
          <span class="font-weight-normal cursor-pointer"> {{ $user->name }} </span>
          @else
          <i class="cursor-pointer fa-solid fa-user pr-2 rounded-circle text-6xl text-black-50"></i>
          <span class="font-weight-normal cursor-pointer"> Guest </span>
          @endif
        </a>
        <div
          class="dropdown-menu dropdown-menu-right navbar-dropdown"
          aria-labelledby="UserDropdown"
        >
          @if ($user !== null)
          <div class="dropdown-header text-center">
            @if ($user->img)
            <img
              class="img-md rounded-circle m-auto"
              src="{{ $user->img }}"
              alt="Profile image"
            />
            @else
            <i class="cursor-pointer fa-solid fa-user m-0 p-0 rounded-circle text-6xl text-black-50"></i>
            @endif
            <p class="mb-1 mt-3">{{ $user->name }}</p>
            <p class="font-weight-light text-muted mb-0">
              {{ $user->email }}
            </p>
          </div>

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
