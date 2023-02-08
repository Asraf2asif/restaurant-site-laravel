<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.partials.head")
  </head>
  <body>
    <div class="container-scroller">
      @include("admin.partials.navbar", ['user' => $user, 'isAdmin' => $isAdmin])
      <div class="container-fluid page-body-wrapper">
        @include("admin.partials.sidebar", ['user' => $user, 'isAdmin' => $isAdmin])
        <div class="main-panel">
            {{ $slot }}
        </div>
      </div>
    </div>
    
    @include("admin.partials.script")        
  </body>
</html>