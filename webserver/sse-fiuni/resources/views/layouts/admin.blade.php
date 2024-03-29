<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <x-header/>
  <body>
    <main class="main" id="top">
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
        <div class="toast fade" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-primary text-white"><strong class="me-auto">Aviso</strong>
            <button class="btn-close btn-close-white" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body"></div>
        </div>
    </div>
    <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="/">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="{{ asset('/img/FIUNI3.png') }}" width="40" height="40"/><span class="d-inline-block align-top"></span></a>
              </div>
            </a>
          </div>
            <x-nav_collapse/>
        </nav>
        <div class="content">
            <x-navexpand/>
            @yield('content')
            <x-footer/>
        </div>
      </div>
    </main>
  </body>
</html>
