
<nav class="navbar">
  <div class="wrapper">
    <a href="https://flowbite.com/" class="logo">
        <img src="/logo.png" class="mr-3 h-11 sm:h-16" alt="Flowbite Logo">
        <span class="text">BYN AGRO</span>
    </a>
    <div class="flex md:order-2 gap-3">
        <a href="#" class="px-5 py-2 bg-primary rounded font-bold">
            <span class="hidden sm:inline">Login</span>
            <i class="bi bi-lock-fill"></i>
        </a>
        <button data-collapse-toggle="navbar-sticky" type="button" class="menu-btn" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    <div class="navmenu" id="navbar-sticky">
        <ul class="">
        <li>
            <a href="{{ route("home") }}" class="" aria-current="page">Home</a>
        </li>
        <li>
            <a href="{{ route("services") }}">Services</a>
        </li>
        <li>
            <a href="{{ route("products") }}">Products</a>
        </li>
        <li>
            <a href="{{ route("blogs") }}">News</a>
        </li>
        <li>
            <a href="{{ route("about") }}">About</a>
        </li>
        <li>
            <a href="{{ route("contact") }}">Contact</a>
        </li>
        </ul>
    </div>
    </div>
</nav>
