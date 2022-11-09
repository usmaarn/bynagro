@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-r from-white to-green-100 h-screen w-screen overflow-hidden flex flex-col">
        <header class="flex items-center gap-5 justify-between p-5">
            <a href="/" class="text-2xl font-black">BYN AGRO</a>

            <nav class="hidden md:flex items-center gap-5 font-semibold">
                <a href="#">Services</a>
                <a href="#">Products</a>
                <a href="#">Blogs</a>
                <a href="#">About</a>
            </nav>

            <div class="flex items-center gap-5">
                <a href="#" class="px-5 py-2.5 bg-black text-white text-xs md:text-base rounded-full">Contact Us</a>

                <button class="md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                    </svg>
                </button>
            </div>

        </header>

        <div class="p-5 flex-grow flex items-center flex-col gap-5 justify-center">
            <div class="col-span-2 md:scale-125">
                <img src="/images/mockup.png" alt="" class="h-full">
            </div>

            <a href="/" class="bg-black px-5 py-3 rounded-full text-white">Back to Home</a>
        </div>

        <div class="flex items-center justify-center gap-5 text-2xl text-zinc-400 mt-auto p-5">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-envelope-fill"></i></a>
        </div>

    </div>
@endsection
