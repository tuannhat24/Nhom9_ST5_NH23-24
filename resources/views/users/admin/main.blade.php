<!DOCTYPE html>
<html lang="en">

<head>
    @include('users/admin.head')
</head>

<body>
    <!-- Navbar -->
    @include('users/admin.navbar')

    <!-- Sidebar -->
    @include('users/admin.sidebar')
    @yield('content')
    @include('users/admin.footer')
</body>


</html>