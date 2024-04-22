<!DOCTYPE html>
<html>
	<head>
		@include('users.admin.partials.head')	
	</head>
	<body>
		@include('users.admin.partials.header')
		@include('users.admin.partials.siderbar')

		
		<div class="mobile-menu-overlay"></div>

		<!--Container-->
		<div class="main-container">
			@yield('content')
		</div>				
	</body>
</html>
