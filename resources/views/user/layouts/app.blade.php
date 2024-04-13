<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Plume d'infos - Salut, nous sommes Plume d'Infos. Découvrez nos réflexions, histoires et idées.</title>
  <meta name="title" content="Blogy - Salut, nous sommes Plume d'Infos. Découvrez nos réflexions, histoires et idées.">
  <meta name="description" content="This is a blog html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="{{asset('user.assets/images/logo.png' )}}" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" type="text/css" href=" {{ asset('user/assets/css/style.css') }}">
  {{-- <link rel="stylesheet" href="./assets/css/style.css"> --}}

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>

{{-- header --}}

    @include('user.partials.header')

{{-- end header --}}
  <main>
    @yield('content')
  </main>





 {{-- footer --}}

  @include('user.partials.footer')

 {{-- endfooter --}}






  <!-- 
    - custom js link
  -->
  {{-- <script src="" defer></script> --}}
  <script src={{asset('user/assets/js/script.js')}} defer></script>



  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>