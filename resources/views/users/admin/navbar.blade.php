<header class="navbar">
    <button id="menubar-toggle-show" class="menubar-toggle" onclick="toggleSidebar()">☰</button>
    <ul class="navbar-nav">
        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
    </ul>
    <form action="{{ route('signout') }}" method="get">
        @csrf
        <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer; font-size:16px;">Signout</button>
    </form>
</header>