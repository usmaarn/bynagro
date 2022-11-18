@extends("layouts.app")

@section("content")

    <x-header>
        <h1 class="text-3xl">Our Products</h1>
    </x-header>

    <div class="services max-w-[1000px] mx-auto space-y-10 md:space-y-24">
        <div v-for="service in services" class="service p-5 flex flex-col-reverse md:grid md:grid-cols-2 gap-5 md:gap-10">
            <div class="space-y-2 md:space-y-5">
                <h1 v-text="service.title" class="text-2xl md:text-3xl capitalize font-medium"></h1>
                <p class="font-light md:text-lg">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    A perferendis amet dolorum exercitationem, aperiam numquam harum.
                    Mollitia vitae debitis non temporibus quas, accusantium quos,
                    enim magnam ipsa corporis labore accusamus?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    A perferendis amet dolorum exercitationem, aperiam numquam harum.
                    Mollitia vitae debitis non temporibus quas, accusantium quos,
                    enim magnam ipsa corporis.
                </p>
            </div>

            <div class="">
                <img src="/assets/images/commerce2.jpg" alt="" class="w-full rounded-lg">
            </div>
        </div>
    </div>
@endsection
