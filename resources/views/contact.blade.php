@extends("layouts.app")

@section("content")

    <x-header>
        <h1 class="text-3xl">Blogs</h1>
    </x-header>

    <div class="max-w-[1200px] mx-auto py-10 grid md:grid-cols-2">
        <div v-for="service in services" class="p-5">
            <div class="">
                <a href="#" class="h-64 md:h-96 bg-green-300 block"></a>
            </div>
            <div class="space-y-3">
                <h1 class="text-2xl">
                    <a href="#" class="hover:underline">@{{ service.title }}</a>
                </h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    A perferendis amet dolorum exercitationem, aperiam numquam harum.
                    Mollitia vitae debitis non temporibus quas, accusantium quos,
                    enim magnam ipsa corporis labore accusamus...
                </p>
                <a href="#" class="inline-block px-5 py-3 rounded-full bg-primary text-sm font-bold">
                    Read more <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="flex justify-center py-5">
        <button class="px-5 py-3 rounded-full bg-primary/50 capitalize text-sm font-bold">
            load more <i class="bi bi-arrow-clockwise"></i>
        </button>
    </div>


@endsection
