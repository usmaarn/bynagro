import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";


import React, { Component } from "react";
import SlickSlider from "react-slick";
import { useEffect } from "react";

export default function Slider () {

    const settings = {
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      draggable: true,
      fade: true,
    };

    useEffect(() => {
        if(typeof window != 'undefined'){
            let slides = document.querySelectorAll('.slide');
            slides.forEach(slide => {
                let img = slide.getAttribute("data-image");
                slide.style.backgroundImage = `linear-gradient(to right, rgba(0,0,0,0.3), green) url("/slideshow/cattle.jpg")`;
            })
        }
    })


    return (
      <div className="relative h-[calc(100vh_-_130px)] text-white">

        <div className="absolute z-10 top-0 left-0 bg-black/60 h-full p-5 w-full flex flex-col gap-3 items-center justify-center">
            <h1 className="text-9xl font-black relative">
                BYN
                <p className='absolute top-0 left-full whitespace-nowrap text-xl text-yellow-500 lining-nums'>RC: 100677</p>
            </h1>
            <h3 className="text-3xl md:text-4xl">AGRO ALLIED NIG LTD.</h3>
            <p className="text-2xl md:text-3xl">We Can Change With Agriculture</p>
        </div>

        <SlickSlider {...settings}>
            <div className="h-[calc(100vh_-_130px)] opacity-10">
                <img src="slideshow/cattle.jpg" alt="image" className="object-cover w-full h-full" />
            </div>
            <div className="h-[calc(100vh_-_130px)]">
                <img src="slideshow/cashewnut.jpg" alt="image" className="object-cover w-full h-full" />
            </div>
            <div className="h-[calc(100vh_-_130px)]">
                <img src="slideshow/ginger.jpg" alt="image" className="object-cover w-full h-full" />
            </div>
            <div className="h-[calc(100vh_-_130px)]">
                <img src="slideshow/grains.jpg" alt="image" className="object-cover w-full h-full" />
            </div>
            <div className="h-[calc(100vh_-_130px)]">
                <img src="slideshow/moringa.jpg" alt="image" className="object-cover w-full h-full" />
            </div>
            <div className="h-[calc(100vh_-_130px)]">
                <img src="slideshow/rice.jpg" alt="image" className="object-cover w-full h-full" />
            </div>
        </SlickSlider>
      </div>
    );
}
