<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Admin</title>

	@yield('styles')

	<!-- Site favicon -->
	<link href="{{ asset( 'AdminArtiste/vendors/images/logoA.png') }}" rel="shortcut icon">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href=" {{ asset( 'AdminArtiste/vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{ asset( 'AdminArtiste/src/plugins/sweetalert2/sweetalert2.css') }}">
	<link rel="stylesheet" type="text/css" href=" {{asset ('AdminArtiste/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href=" {{asset ('AdminArtiste/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}} ">
	<link rel="stylesheet" type="text/css" href=" {{asset('AdminArtiste/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href=" {{asset('AdminArtiste/src/plugins/jquery-steps/jquery.steps.css')}}">
	<link rel="stylesheet" type="text/css" href=" {{asset ('AdminArtiste/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href=" {{asset ('AdminArtiste/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href=" {{asset ('AdminArtiste/vendors/styles/style.css')}}">
	<link rel="stylesheet" type="text/css" href="	{{asset ('AdminArtiste/src/plugins/switchery/switchery.min.css')}}">
	<!-- bootstrap-tagsinput css -->
	<link rel="stylesheet" type="text/css" href=" {{asset('AdminArtiste/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}} ">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href=" {{asset('AdminArtiste/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}} ">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	    <!-- include libraries(jQuery, bootstrap) -->


		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

    {{-- @include('partials.loader') --}}

    @include('admin.partials.header')

    @include('admin.partials.sidebar')

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
            @yield('content')

            @include('admin.partials.footer')
		</div>
	</div>
	<!-- js -->
		@yield('scirpts')
	<script src={{asset('AdminArtiste/vendors/scripts/core.js')}}></script>
	<script src={{asset('AdminArtiste/vendors/scripts/script.min.js')}}></script>
	<script src={{asset('AdminArtiste/vendors/scripts/process.js')}}></script>
	<script src={{asset ('AdminArtiste/vendors/scripts/layout-settings.js')}}></script>
	<script src={{asset('AdminArtiste/src/plugins/apexcharts/apexcharts.min.js')}}></script>
	<script src={{asset('AdminArtiste/src/plugins/datatables/js/jquery.dataTables.min.js')}}></script>
	<script src={{asset('AdminArtiste/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}></script>
	<script src={{asset('AdminArtiste/src/plugins/datatables/js/dataTables.responsive.min.js')}}></script>
	<script src={{asset('AdminArtiste/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}></script>
	<script src={{asset ('AdminArtiste/vendors/scripts/dashboard.js')}}></script>

		<!-- switchery js -->
	<script src={{asset ('AdminArtiste/src/plugins/switchery/switchery.min.js')}}></script>
		<!-- bootstrap-tagsinput js -->
	<script src={{asset ('AdminArtiste/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}></script>
		<!-- bootstrap-touchspin js -->
	<script src={{asset ('AdminArtiste/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}></script>
	<script src={{asset ('AdminArtiste/vendors/scripts/advanced-components.js')}}></script>


		<!-- add sweet alert js & css in footer -->
		<script src={{asset ('AdminArtiste/src/plugins/sweetalert2/sweetalert2.all.js')}}></script>
		<script src={{asset ('AdminArtiste/src/plugins/sweetalert2/sweet-alert.init.js')}}></script>
	@yield('scripts')
</body>
</html>