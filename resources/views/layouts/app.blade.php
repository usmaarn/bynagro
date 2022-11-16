@extends('layouts.master')

@section("wrapper")
    <div class="">

        <header class="relative h-[80vh] font-[18px]">
            <img src="/images/slides/cows.jfif" alt="" class="block w-full h-full object-cover">
            <div class="bg-black/70 absolute top-0 left-0 w-full h-full flex flex-col">
                @include("layouts.navbar")

                <div class="mt-24 flex items-center justify-center text-white flex-grow flex-col gap-5">
                    @yield("heading")
                </div>
            </div>
        </header>

        <div class="">
            @yield("content")
        </div>
    </div>
@endsection
