@extends('layouts.app')

@section('content')

    <header class="relative h-[calc(100vh_-_70px)] mt-[70px]">
        <img src="/images/slides/cows.jfif" alt="" class="block w-full h-full object-cover">
        <div class="bg-black/70 absolute top-0 left-0 w-full h-full flex flex-col justify-center text-white">

            <div class="max-w-[1200px] mx-auto p-5">
                <div class="space-y-5 md:w-4/5 lg:w-2/3">
                    <h2 class="text-2xl md:text-4xl uppercase font-bold">BYN AGRO ALLIED LTD.</h2>
                    <h1 class="text-4xl md:text-6xl font-black text-primary capitalize">We can Change with Agriculture</h1>
                    <h4 class="text-xl md:text-2xl">
                        Supercharge your websites with managed hosting trusted by 75,000+ businesses that
                        demand high performance and reliability for their online presence.
                    </h4>

                    <div class="flex flex-col sm:flex-row gap-2 md:gap-5 text-center">
                        <a href="#" class="px-5 py-3 font-bold uppercase bg-primary text-black rounded">know more about us</a>
                        <a href="#" class="px-5 py-3 font-bold uppercase bg-white text-black rounded">get in touch</a>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <div class="">

        <div class="max-w-[1200px] mx-auto px-5 py-10 space-y-5">
            <h1 class="text-xl font-black">Welcome!</h1>
            <p class="md:text-lg text-zinc-700 md:leading-10">
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

        <div class="bg-zinc-100 space-y-10 py-20 px-5">

            <div class="max-w-[1000px] mx-auto ">
                <h1 class="capitalize text-2xl mb-2 text-center font-black">Discover Possibilities, Not Hosting Worries</h1>
                <p class="text-center mb-10">
                    Cloudways removes the complexity of cloud hosting and lets you focus on what matters most: your business!
                </p>

                <div class="grid sm:hgrid-cols-2 md:grid-cols-3 gap-16">
                    <div v-for="service in services" class="gap-5 text-center md:text-left">
                        <img :src="service.icon ?? '/images/icons/1.png' " alt="" class="h-16 mx-auto md:mx-0" />
                        <h3 class="text-xl text-primary-500 font-bold capitalize" v-text="service.title"></h3>
                        <p class="">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolores officia reiciendis sed qui est?
                        </p>
                    </div>
                </div>

                <div class="flex mt-10 justify-end">
                    <a href="{{ route("services") }}" class="px-5 text-center text-white block py-2 text-sm
                        font-bold rounded bg-primary">
                        View All Services <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="my-info p-5 sm:p-10 md:p-24">
            <div class="text-white space-y-5 flex flex-col items-center text-center">
                <h1 class="text-2xl sm:text-3xl font-black">Lorem ipsum dolor sit amet.</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, dolor sint distinctio ducimus nostrum esse voluptatum laboriosam rerum saepe deserunt. Neque hic repellendus molestias laboriosam quae ea itaque iusto dolorum, at ex iure possimus exercitationem quibusdam aut atque molestiae maiores. Excepturi nobis doloremque ipsa aperiam aliquid aliquam nemo unde rem?
                </p>
                <a href="#" class="md:text-lg text-black inline-block px-10 py-3 rounded bg-primary">
                    Learn More <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="p-5 max-w-[1000px] mx-auto md:py-24">

            <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-center mb-10">Our Products</h1>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-10 md:gap-5 lg:gap-16">
                <div v-for="i in 5" class="shadow bg-white">
                    <div class="">
                        <img src="/assets/images/commerce.jpg" alt="" />
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl capitalize font-bold">Ginger and Cashew</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet!</p>
                        <a href="#" class="px-5 py-1.5 text-white text-sm rounded bg-primary inline-block text-center">
                            Read More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="md:flex mt-10 justify-end ">
                <a href="{{ route('products') }}" class="px-5 text-center text-white block py-2 text-sm
                    font-bold rounded bg-primary">
                    View All Products <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="p-5 max-w-[1200px] mx-auto md:py-24">

            <h1 class="text-3xl md:text-center pl-5 border-l-4 border-l-black md:pl-0 md:border-l-0 mb-10
             uppercase font-bold tracking-widest">Blogs</h1>

            <div class="grid md:grid-cols-2 gap-10 md:gap-5 lg:gap-16">
                <div v-for="i in 5" class="md:flex gap-5">
                    <div class="">
                        <div class="w-full md:w-56 h-56 bg-primary rounded overflow-hidden">
                            <img src="/assets/images/commerce2.jpg" alt="" class="w-full h-full object-cover" />
                        </div>
                    </div>
                    <div class="">
                        <h3 class="text-xl font-bold">
                            <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                        </h3>

                        <div class="flex gap-5 text-sm my-2 text-primary">
                            <a href="#">
                                <i class="bi bi-calendar"></i> 24 Mar 2018
                            </a>
                        </div>

                        <p class="mb-2 text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, eveniet!...
                        </p>

                        <a href="#" class="bg-primary rounded text-white px-3 py-2 text-sm hover:underline">
                            read more <span class="tracking-[-3px]">>></span>
                        </a>

                    </div>
                </div>
            </div>

            <div class="md:flex mt-10 justify-end ">
                <a href="{{ route("blogs") }}" class="px-5 text-center text-white block py-2 text-sm
                    font-bold rounded bg-primary">
                    View All Blogs <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="bg-zinc-900 text-zinc-300 px-5 py-10 sm:p-10 md:p-24 flex flex-col items-center text-center gap-10">
            <div class="space-y-5">
                <h1 class="text-2xl uppercase">subscribe to our Newsletter</h1>
                <p class="">Subscribe and get the latest news update and useful tips, advice and best offer.</p>
            </div>
            <form v-on:submit.prevent method="post" action="" class="flex flex-col w-full sm:flex-row gap-2">
                    @csrf
                    <input type="text" placeholder="email address" class="border-0 sm:flex-grow px-5 py-2 rounded" />
                    <button type="submit" class="px-5 py-2 bg-primary rounded text-black">Subscribe</button>
            </form>
        </div>
    </div>
@endsection
