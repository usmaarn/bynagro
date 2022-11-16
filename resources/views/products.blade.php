@extends("layouts.app")

@section("content")


    <x-header>
        <h1 class="text-3xl">Our Agricultural Products</h1>
    </x-header>

    <div class="services max-w-[1200px] mx-auto space-y-24 mt-10">
        <div v-for="service in services" class="service p-5 grid md:grid-cols-2 gap-10">
            <div class="">
                <div class="h-96 bg-green-300"></div>
            </div>
            <div class="space-y-5">
                <h1 v-text="service.title" class="text-2xl md:text-4xl"></h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    A perferendis amet dolorum exercitationem, aperiam numquam harum.
                    Mollitia vitae debitis non temporibus quas, accusantium quos,
                    enim magnam ipsa corporis labore accusamus?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    A perferendis amet dolorum exercitationem, aperiam numquam harum.
                    Mollitia vitae debitis non temporibus quas, accusantium quos,
                    enim magnam ipsa corporis labore accusamus?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    A perferendis amet dolorum exercitationem, aperiam numquam harum.
                    Mollitia vitae debitis non temporibus quas, accusantium quos,
                    enim magnam ipsa corporis labore accusamus?
                </p>
            </div>
        </div>
    </div>
@endsection
