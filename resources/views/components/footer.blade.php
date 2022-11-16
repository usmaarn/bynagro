<footer class="bg-black p-5 py-12 sm:p-10 md:p-24 md:grid space-y-10 md:space-y-0 grid-cols-5 gap-10">
        <div class="text-white col-span-2 md:pr-10 space-y-5">
            <h1 class="text-3xl">BYN AGRO ALLIED LTD</h1>
            <p class="text-light text-zinc-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, perspiciatis
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, perspiciatis
            </p>
        </div>

        <ul class="text-zinc-400 tracking-wider space-y-1 uppercase text-sm">
            <li class="uppercase text-base font-medium mb-5">Site Pages</li>
            <li><a href="#" class="hover:underline">Home</a></li>
            <li><a href="#" class="hover:underline">Products</a></li>
            <li><a href="#" class="hover:underline">Services</a></li>
            <li><a href="#" class="hover:underline">Blogs</a></li>
        </ul>

        <ul class="text-zinc-400 tracking-wider space-y-1 uppercase text-sm">
            <li class="uppercase text-base font-medium mb-5">INFO PAGES</li>
            <li><a href="#" class="hover:underline">About Us</a></li>
            <li><a href="#" class="hover:underline">Contact Us</a></li>
            <li><a href="#" class="hover:underline">Privacy Policy</a></li>
            <li><a href="#" class="hover:underline">Terms & Conditions</a></li>
        </ul>

        <ul class="text-zinc-400 tracking-wider space-y-2 text-sm">
            <li class="uppercase text-base font-medium mb-5">MORE INFORMATION</li>
            <li class="flex items-start gap-3">
                <i class="bi bi-geo-alt-fill mt-1"></i>
                <p>No. M4 Polytechnic Road, T/Wada - Kaduna</p>
            </li>
            <li class="flex items-center gap-3">
                <i class="bi bi-phone-fill"></i>
                <p>+234-9077022461</p>
            </li>
            <li class="flex items-center gap-3">
                <i class="bi bi-phone-fill"></i>
                <p>+234-9077022461</p>
            </li>
            <li class="flex items-center gap-3">
                <i class="bi bi-envelope-fill"></i>
                <p>info@bynagro.com</p>
            </li>
        </ul>

        <div class="flex items-center gap-5 col-span-2 flex-wrap">
            <a href=""
                v-for="link in ['facebook', 'twitter', 'instagram', 'linkedin', 'youtube']"
                class="w-10 h-10 flex items-center justify-center border border-zinc-500
                    text-zinc-500 text-xl hover:bg-zinc-500 hover:text-zinc-900 transition-all duration-300"
            >
                <i :class="'bi bi-'+ link"></i>
            </a>
        </div>

        <div class="col-span-5 text-zinc-500 text-center uppercase">
            Copyright © 2022 All rights reserved | <a href="#" class="text-primary-500/70 hover:underline">BYN AGRO ALLIED LTD.</a>
        </div>
    </footer>
