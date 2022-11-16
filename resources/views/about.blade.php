@extends("layouts.app")

@section("content")

    <x-header>
        <h1 class="text-3xl">About Us</h1>
    </x-header>

    <div class="max-w-[1200px] mx-auto py-10 space-y-6 md:space-y-24">
        <div class="grid md:grid-cols-2">
            <div class="bg-gradient-to-tr from-primary to-black hidden md:block">
                <img src="/images/slides/cows.jfif" alt="" class="opacity-80">
            </div>
            <div class="p-5 space-y-5">
                <h2 class="text-3xl md:text-4xl">BYN AGRO ALLIED LTD</h2>
                <p class="text-lg md:text-xl">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                </p>
                <a href="{{ route("contact") }}" class="inline-block px-5 py-3 rounded-full bg-primary font-bold">
                    Get in Touch <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-2">
            <div class="p-5 space-y-5">
                <h2 class="text-3xl md:text-4xl">Our Vission</h2>
                <p class="text-lg md:text-xl">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                </p>
                <a href="{{ route("contact") }}" class="inline-block px-5 py-3 rounded-full bg-primary font-bold">
                    Get in Touch <i class="bi bi-arrow-right"></i>
                </a>
            </div>

           <div class="bg-gradient-to-tr from-primary to-black hidden md:block">
                <img src="/images/slides/cows.jfif" alt="" class="opacity-80">
            </div>
        </div>

        <div class="grid md:grid-cols-2">
            <div class="bg-gradient-to-tr from-primary to-black hidden md:block">
                <img src="/images/slides/cows.jfif" alt="" class="opacity-80 object-cover">
            </div>
            <div class="p-5 space-y-5">
                <h2 class="text-3xl md:text-4xl">Our Mission</h2>
                <p class="text-lg md:text-xl">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, reprehenderit?
                </p>
                <a href="{{ route("contact") }}" class="inline-block px-5 py-3 rounded-full bg-primary font-bold">
                    Get in Touch <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

@endsection
