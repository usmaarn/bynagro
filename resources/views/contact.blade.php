@extends("layouts.app")

@section("content")

    <x-header>
        <div class="text-center">
            <p>Ask a question—we’re all ears!</p>
            <h1 class="text-4xl font-bold">Contact Us</h1>
            <p class="mt-5 md:w-2/3 mx-auto">
                Whether you have a question about our products, services, pricing, need a quote,
                or anything else, our team is ready to answer all your questions.
            </p>
        </div>
    </x-header>

    <div class="max-w-[1000px] px-5 mx-auto py-16">
        <h1 class="text-3xl font-black">Get In Touch</h1>
        <p class="mb-5">Use the form below to drop us an email.</p>

        <div class="">
            <div class="grid grid-cols-3 gap-1">
                <button class="bg-primary/50 font-bold py-3 rounded-t-lg">
                    <i class="bi bi-envelope"></i>
                    <span class="hidden sm:inline"> Mail</span>
                </button>
                <button class="bg-zinc-100 font-bold py-3 rounded-t-lg">
                    <i class="bi bi-whatsapp"></i>
                    <span class="hidden sm:inline"> WhatsApp</span>
                </button>
                <button class="bg-zinc-100 font-bold py-3 rounded-t-lg">
                    <i class="bi bi-telephone"></i>
                    <span class="hidden sm:inline"> Call</span>
                </button>
            </div>

            <form action="" class="shadow p-5 rounded font-light">
                <p class="text-sm">
                    Note: Please note that this inquiry form is solely for the purpose of
                    sales and services inquiries, and not for any technical/financial support.
                </p>
                <div class="mt-5 grid sm:grid-cols-2 gap-5">
                    <input type="text" class="rounded border-zinc-300 bg-zinc-50 border-dashed font-extralight" placeholder="First Name" />
                    <input type="text" class="rounded border-zinc-300 bg-zinc-50 border-dashed font-extralight" placeholder="Last Name" />
                    <input type="text" class="rounded border-zinc-300 bg-zinc-50 border-dashed font-extralight" placeholder="Email Address" />
                    <input type="text" class="rounded border-zinc-300 bg-zinc-50 border-dashed font-extralight" placeholder="Phone Number" />
                    <textarea class="rounded border-zinc-300 bg-zinc-50 border-dashed font-extralight sm:col-span-2 h-32"
                        placeholder="please describe your message"></textarea>

                    <button class="px-5 py-3 font-bold bg-primary/50 text-center rounded ">
                        Send Message <i class="bi bi-send-fill"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection
