<!-- MD Nav -->
<div class="container pt-3">
    <!-- <div class="container d-none d-md-block pt-3"> -->
    <div class="row navlinks-container">
        <ul class="md-navlinks">
            <li
                class="navlink d-none d-md-block">
                <a
                    class="{{ Request::is('about') ? 'active-link' : '' }}"
                    href="{{ route('about') }}">
                    About
                </a>
            </li>
            <li
                class="navlink d-none d-md-block">
                <a
                    class="{{ Request::is('menu') ? 'active-link' : '' }}"
                    href="{{ route('menu') }}">
                    Menu
                </a>
            </li>
            <li class="navlink logo">
                <a href="{{ route('welcome') }}">
                    {{-- route to auth user's account if logged in--}}
                    McPinsan
                </a>
            </li>
            <li
                class="navlink d-none d-md-block">
                <a
                    class="{{ Request::is('workspaces') ? 'active-link' : '' }}"
                    href="{{ route('workspaces') }}">
                    Workspaces
                </a>
            </li>
            <li
                class="navlink d-none d-md-block">
                <a
                    class="{{ Request::is('contact') ? 'active-link' : '' }}"
                    href="{{ route('contact') }}">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- MD Nav -->

<!-- SM Nav -->
<nav class="navbar d-md-none">
    <div id="hamburger" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
            <i class="fas fa-chevron-left"></i>
        </a>

        <!-- Overlay content -->
        <div class="overlay-content">
            <a href="/about">About</a>
            <a href="/menu">Menu</a>
            <a href="/workspaces">Workspaces</a>
            <a href="/contact">Contact</a>
        </div>

    </div>

    <!-- Use any element to open/show the overlay navigation menu -->
    <span class="open-menu" onclick="openNav()">
        <i class="fas fa-chevron-right"></i>
    </span>
</nav>
<!-- SM Nav -->
