@extends("layouts.app")

@section("content")

    <x-header>
        <h1 class="text-3xl">Blogs</h1>
    </x-header>

    <div class="max-w-[1000px] mx-auto py-10 ">
        <div v-for="service in services" class="p-5 grid md:grid-cols-2 gap-5">
            <a href="#" class="block w-full">
                <img src="/assets/images/commerce.jpg" alt="" class="rounded-lg w-full">
            </a>
            <div class="space-y-2 p-2">
                <div class="flex text-sm uppercase font-light">
                    <span class="pr-3">Oct 5, 2022</span>
                    <span class="px-3 border-x">fishing</span>
                    <span class="pl-3">5 min read</span>
                </div>

                <h1 class="text-2xl md:text-3xl">
                    <a href="#" class="hover:underline">@{{ service.title }}</a>
                </h1>
                <p class="font-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam,
                     porro tempore? Hic odit eligendi maxime nihil eveniet laborum blanditiis cum....
                </p>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-5">
        <button class="px-5 py-3 rounded-full bg-primary/50 capitalize text-sm font-bold">
            load more <i class="bi bi-arrow-clockwise"></i>
        </button>
    </div>


@endsection
