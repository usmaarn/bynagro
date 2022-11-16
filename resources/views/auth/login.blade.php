@extends("layouts.master")

@section("wrapper")
    <div class="h-screen flex items-center p-2 flex-col gap-10">

        <x-navbar />

        <div class="flex-grow place-self-center flex flex-col justify-center max-w-[500px] mx-auto">
            <div class="p-5 bg-zinc-100 rounded">
                <h1 class="text-2xl pb-5">Login</h1>
                <form action="" class="flex flex-col gap-3">
                    <input type="text" placeholder="username" class="rounded px-5 py-3 border-0 bg-white" />
                    <input type="text" placeholder="username" class="rounded px-5 py-3 border-0 bg-white" />
                    <button class="rounded px-5 py-3 border-0 bg-primary font-bold">
                        Login <i class="bi bi-box-arrow-in-right"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="flex items-center gap-5 col-span-2 flex-wrap">
            <a href=""
                v-for="link in ['facebook', 'twitter', 'instagram', 'linkedin', 'youtube']"
                class="text-zinc-400 text-xl "
            >
                <i :class="'bi bi-'+ link"></i>
            </a>
        </div>

    </div>
@endsection
