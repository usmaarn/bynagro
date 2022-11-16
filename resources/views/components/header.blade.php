@props(["class" => "h-64"])

<header class="relative {{ $class }}">
    <img src="/images/slides/cows.jfif" alt="" class="block w-full h-full object-cover">
    <div class="bg-black/70 absolute top-0 left-0 w-full h-full flex flex-col">

        <div class="mt-24 flex items-center justify-center text-white flex-grow flex-col gap-5">
            {{ $slot }}
        </div>
    </div>
</header>
