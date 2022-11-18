
<nav class="navbar">
  <div class="wrapper">

        <a href="{{ route("home") }}" class="flex items-center">
            <img src="/assets/images/logo.png" class="h-8 sm:h-10 md:w-64" alt="BYN AGRO ALLIED LTD">
        </a>

        <div :class="{'active': openNavbar}" class="navmenu">
            <ul class="">
                <li>
                    <a href="{{ route("products") }}">
                        <h3>Products</h3>
                        <p class="md:hidden">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    </a>
                </li>
                 <li>
                    <a href="{{ route("services") }}">
                        <h3>Services</h3>
                        <p class="md:hidden">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    </a>
                </li>
                 <li>
                    <a href="{{ route("blogs") }}">
                        <h3>Blogs</h3>
                        <p class="md:hidden">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    </a>
                </li>
                 <li>
                    <a href="{{ route("about") }}" class="">
                        <h3>About Us</h3>
                        <p class="md:hidden">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    </a>
                </li>
                 <li>
                    <a href="{{ route("contact") }}">
                        <h3>Contact Us</h3>
                        <p class="md:hidden">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    </a>
                </li>
            </ul>
        </div>

         <div class="flex items-center gap-3">
            <a href="{{ route("login") }}" class="px-5 py-1.5 uppercase text-sm bg-primary/50 rounded">Login</a>
            <button @@click="openNavbar = !openNavbar" class="menu-btn" :class="{'active': openNavbar}">
                <i v-if="openNavbar" class="bi bi-x-lg"></i>
                <i v-else class="bi bi-list"></i>
            </button>
        </div>

  </div>
</nav>
