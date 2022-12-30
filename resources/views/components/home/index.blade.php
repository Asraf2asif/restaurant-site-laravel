<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.partials.head")
  </head>
  <body>
    <div class="container-scroller">
      @include("admin.partials.navbar")
      <div class="container-fluid page-body-wrapper">
        @include("admin.partials.sidebar")
        <div class="main-panel">
            {{ $slot }}
        </div>
      </div>
    </div>
    
    @include("admin.partials.script")        
  </body>
</html>