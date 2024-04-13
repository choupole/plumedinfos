<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Plume d'Infos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">
    <link rel="stylesheet" href=" {{ asset('admin/src/dist/css/adminx.css') }}" media="screen" />

    <!--
      # Optional Resources
      Feel free to delete these if you don't need them in your project
    -->
  </head>
  <body>
    <div class="adminx-container">

        {{-- start navbar --}}

        @include('admin.partials.navbar')

        {{-- end navbar --}}


      <!-- expand-hover push -->
      <!-- Sidebar -->
        @include('admin.partials.sidebar')

    <!-- Sidebar End -->

      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            @include('admin.partials.breadcrumb')
            {{-- end breadcrumb --}}

            <div class="pb-3">
              <h1> {{$page}} </h1>
            </div>
            @yield('content')

          </div>
        </div>
      </div>
    </div>

    @yield('scirpts')
    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src=" {{ asset('admin/src/dist/js/vendor.js') }}"></script>
    <script src=" {{ asset('admin/src/dist/js/adminx.js') }}"></script>




    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.vanilla.js"></script-->
  </body>
</html>