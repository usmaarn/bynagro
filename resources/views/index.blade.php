@extends('layouts.app')

@section('content')

    @section("heading")
        <div class="max-w-[1000px] mx-auto text-center space-y-10 p-5">
            <h1 class="text-5xl md:text-7xl font-black">We can Change with Agriculture</h1>
            <p class="text-xl sm:text-2xl md:text-4xl text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, natus?
            </p>
            <a href="#" class="inline-block px-10 py-3 rounded-full bg-primary text-black font-bold">Get In Touch</a>
        </div>
    @endsection

    <div class="">

        <div class="max-w-[1200px] mx-auto px-5 py-10 space-y-5">
            <h1 class="text-4xl font-black ">Welcome!</h1>
            <p class="md:text-2xl text-zinc-700 md:leading-10">
                The government's intervention in the Agro-allied sector must essentially be aimed at
                creating the right environment for rapid expansion of locally - owned enterprises.
                However, there are serious challenges in this direction. Industries processing of agricultural
                product are almost negligible, existing standards being very basic and often
                incomparable with export requirements. Post-harvest losses are also very high, assesses at
                near 50% of total production. (Van Buren) Labour saving production and advanced
                harvesting and processing technologies are therefore critical for sustained revival of
                Nigerians Agriculture.
            </p>
        </div>

        <div class="bg-zinc-100 space-y-10 pb-20">

            <div class="mb-5 w-24 h-24 border-[3rem] border-zinc-100 border-t-white bg-white mx-auto"></div>

            <h1 class="uppercase text-2xl mb-2 text-center">Services</h1>

            <div class="max-w-[1200px] mx-auto grid md:grid-cols-2 gap-16">
                <div v-for="service in services" class="flex flex-col items-center mx-auto text-center gap-5 max-w-[400px]">
                    <img :src="service.icon ?? '/images/icons/1.png' " alt="" class="w-24" />
                    <div class="space-y-2">
                        <h3 class="text-xl sm:text-2xl text-primary-500" v-text="service.title"></h3>
                        <p class="text-lg">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolores officia reiciendis sed qui est?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-info p-5 sm:p-10 md:p-24">
            <div class="text-white space-y-5 flex flex-col items-center text-center">
                <h1 class="text-2xl sm:text-3xl">Lorem ipsum dolor sit amet.</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, dolor sint distinctio ducimus nostrum esse voluptatum laboriosam rerum saepe deserunt. Neque hic repellendus molestias laboriosam quae ea itaque iusto dolorum, at ex iure possimus exercitationem quibusdam aut atque molestiae maiores. Excepturi nobis doloremque ipsa aperiam aliquid aliquam nemo unde rem?
                </p>
                <a href="#" class="md:text-lg text-black inline-block px-10 py-3 rounded bg-primary">
                    Learn More <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="p-5 max-w-[1200px] mx-auto md:py-24">

            <h1 class="text-3xl text-center mb-10">Our Products</h1>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-10 md:gap-5 lg:gap-16">
                <div v-for="i in 5" class="">
                    <div class="h-64 w-full bg-primary opacity-40 rounded"></div>
                    <div class="">
                        <h3 class="text-xl uppercase">Ginger</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet!</p>
                        <a href="#" class="px-5 py-3 rounded-lg bg-primary inline-block text-center">
                            Read More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="md:flex mt-10 justify-end ">
                <a href="#" class="px-5 text-center block py-3 rounded bg-primary">
                    View All Products <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="p-5 max-w-[1200px] mx-auto md:py-24">

            <h1 class="text-3xl md:text-center pl-5 border-l-4 border-l-black md:pl-0 md:border-l-0 mb-10 uppercase font-bold tracking-widest">Blogs</h1>

            <div class="grid md:grid-cols-2 gap-10 md:gap-5 lg:gap-16">
                <div v-for="i in 5" class="md:flex gap-5">
                    <div class="">
                        <div class="w-full md:w-56 h-56 bg-primary rounded"></div>
                    </div>
                    <div class="">
                        <h3 class="text-xl font-medium">
                            <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                        </h3>

                        <div class="flex gap-5 text-sm my-2 text-primary">
                            <a href="#">
                                <i class="bi bi-calendar"></i> 24 Mar 2018
                            </a>
                        </div>

                        <p class="mb-2 text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet!
                        </p>

                        <a href="#" class="text-primary text-sm hover:underline">
                            read more <span class="tracking-[-3px]">>></span>
                        </a>

                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <a href="#" class="px-5 py-3 rounded bg-primary-400">
                    View Blogs <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="bg-zinc-200 p-5 sm:p-10 md:p-24 grid md:grid-cols-2 items-center gap-10">
            <div class="space-y-5">
                <h1 class="text-2xl uppercase">subscribe to our Newsletter</h1>
                <p class="">Subscribe and get the latest news update and useful tips, advice and best offer.</p>
            </div>
            <form v-on:submit.prevent method="post" action="" class="flex flex-col md:flex-row gap-2">
                    @csrf
                    <input type="text" placeholder="email address" class="border flex-grow px-5 py-3 rounded" />
                    <button type="submit" class="px-5 py-3 bg-primary-400 rounded">Subscribe</button>
            </form>
        </div>
    </div>

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
@endsection
