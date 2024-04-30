<!DOCTYPE html>
<html>
	<head>
		@include('users.admin.partials.head')	
		@yield('css')
	</head>
	<body>
		@include('users.admin.partials.header')
		@include('users.admin.partials.siderbar')

		
		<div class="mobile-menu-overlay"></div>

		<!--Container-->
		<div class="main-container">
			@yield('content')
		</div>	
		

		<link rel="stylesheet" href="/assets/font/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css">
		<script src="{{ asset('vendors/scripts/core.js')}}"></script>
		<script src="{{ asset('vendors/scripts/script.min.js')}}"></script>
		<script src="{{ asset('vendors/scripts/layout-settings.js')}}"></script>
		@yield('js')

	</body>
</html>
