<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/assets/css/admin.css">
<link rel="stylesheet" href="/assets/font/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $title }}</title>
@yield('users/admin.head')


<style>
    .hidden {
        display: none;
    }
</style>

<script src="/assets/js/admin.js">
</script>