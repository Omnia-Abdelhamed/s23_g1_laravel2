<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
  @include('layouts.admin.head')
  @yield('css')
  </head>

  <body>

    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >

      <header class="topbar" data-navbarbg="skin5">
      @include('layouts.admin.navbar')
      </header>

      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        @include('layouts.admin.aside')
        <!-- End Sidebar scroll-->
      </aside>

    <div class="page-wrapper">
        <!-- Bread crumb -->
        @yield('bread-crumb')
        <!-- End Bread crumb -->

        <!-- Container fluid -->
        <div class="container-fluid">
            @yield("content")
        </div>
        <!-- End Container fluid -->

        <!-- footer -->
        <footer class="footer text-center">
         @include('layouts.admin.footer')
        </footer>
        <!-- End footer -->

      </div>
      <!-- End Page wrapper -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <!-- ============================================================== -->
@include('layouts.admin.scripts')
@yield('js')
  </body>
</html>

