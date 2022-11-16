
<nav class="navbar">
  <div class="container wrapper">

        <a href="{{ route("home") }}" class="flex items-center">
        <img src="/logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
        <span class="self-center text-xl text-green-500 font-semibold whitespace-nowrap dark:text-white">BYN AGRO</span>
    </a>

    <div class="flex md:order-2">
        <a href="{{ route("login") }}" class="bg-primary/80 hover:bg-primary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <span >Login</span>
            <i class="bi bi-lock-fill"></i>
        </a>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
    </div>

    <div class="navmenu items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="{{ route("home") }}" class="active" aria-current="page">Home</a>
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




{{-- <nav class="navbar">
  <div class="wrapper">
    <a href="{{ route("home") }}" class="logo">
        <img src="/logo.png" class="mr-3 h-11 sm:h-16" alt="Flowbite Logo">
        <span class="text">BYN AGRO</span>
    </a>
    <div class="flex md:order-2 gap-3">
        <a href="{{ route("login") }}" class="px-5 py-2 bg-primary rounded font-bold">
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
</nav> --}}
