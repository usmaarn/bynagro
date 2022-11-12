@extends('layouts.app')

@section('content')
    <div class="">
        <div class="h-[90vh] md:h-[100vh]">
            <slider-component></slider-component>
        </div>

        <div class="p-5 md:p-10 lg:p-24">
            <h1 class="uppercase text-2xl text-center">Our Services</h1>
            <p class="text-center md:w-2/3 mx-auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias excepturi voluptas assumenda consequatur.
                Tempora asperiores dicta, illum repellat id quas?
            </p>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-10 place-items-center mt-10">
                <div v-for="i in 10" class="flex items-start gap-5">
                    <img src="/images/icons/1.png" alt="" class="w-10" />
                    <div class="space-y-2">
                        <h3 class="text-xl uppercase">Lorem ipsum dolor sit amet.</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolores officia reiciendis sed qui est?
                        </p>
                    </div>
                </div>
            </div>

            <a href="#" class="float-right px-5 py-3 rounded-full bg-orange-400 text-white">
                Learn More <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="my-info">
            <div class="">
                
            </div>
        </div>
    </div>
@endsection
