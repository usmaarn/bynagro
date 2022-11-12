
@include('layouts.navbar')

<div class="bg-gradient-to-r from-white to-green-100 h-screen w-screen overflow-hidden flex flex-col">
        <div class="p-5 flex-grow flex items-center flex-col gap-5 justify-center">
            <div class="col-span-2 md:scale-125">
                <img src="/images/mockup.png" alt="" class="h-full">
            </div>


            @include('layouts.navbar')
            <a href="/" class="bg-bla
            ck px-5 py-3 rounded-full text-white">Back to Home</a>
        </div>

        <div class="flex items-center justify-center gap-5 text-2xl text-zinc-400 mt-auto p-5">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-envelope-fill"></i></a>
        </div>

    </div>
