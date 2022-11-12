<header class="z-10 bg-white overflow-hidden flex items-center gap-5 justify-between p-5">

    @verbatim
        <a href="/" class="sm:text-2xl flex items-center gap-1">
            <img src="/logo.png" alt="" class="w-10 h-10">
            <p class="hidden sm:block">BYN AGRO</p>
        </a>

        <nav  class="navmenu" :class="{'active': openNavbar}">
            <a href="#" class="">Services</a>
            <a href="#">Products</a>
            <a href="#">Blogs</a>
            <a href="#">About</a>
        </nav>

        <div class="flex items-center gap-5">
            <a href="#" class="px-5 py-2.5 bg-black text-white text-xs md:text-base rounded-full">
                Login <i class="bi bi-lock"></i>
            </a>

            <button @click="openNavbar = !openNavbar" class="md:hidden">
                <svg v-if="!openNavbar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                </svg>
                <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

    @endverbatim

</header>
