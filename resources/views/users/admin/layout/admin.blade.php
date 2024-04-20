<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>
		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css')}}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{ asset('vendors/styles/icon-font.min.css')}}"
		/>
		
		<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css')}}" />
		<link rel="stylesheet" href="{{ asset('vendors/styles/style1.css')}}">
	</head>
	<body>
		@include('users.admin.partials.header')
		@include('users.admin.partials.siderbar')

		
		<div class="mobile-menu-overlay"></div>

		<!--Container-->
		<div class="main-container">
			@yield('content')
		</div>

		
		<!-- js -->
		<script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
		<script src="{{ asset('vendors/scripts/core.js')}}"></script>
		<script src="{{ asset('vendors/scripts/script.min.js')}}"></script>		
		<script src="{{ asset('vendors/scripts/layout-settings.js')}}"></script>				
	</body>
</html>
