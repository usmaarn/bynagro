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
      <div className="slider">
        <SlickSlider {...settings}>
          <div className="slide relative overflow-hidden">
            <div className="wrapper absolute md:static top-0 left-0 opacity-30 md:opacity-60 h-full">
                <img src="slideshow/cattle.jpg" alt="image" className="object-cover h-full w-full" />
            </div>
            <div className="md:absolute top-0 md:scale-125 left-0 md:border-r-4 border-r-white/50  md:bg-black/80 md:-skew-x-12 md:w-3/5 lg:w-1/2 h-full flex flex-col gap-3 items-center justify-center">
                <div className="md:skew-x-12 space-y-5 md:scale-75">
                    <h1 className="text-8xl font-black">BYN</h1>
                    <h3 className="text-4xl">AGRO ALLIED NIG LTD.</h3>
                    <p className="text-4xl">We Can Change With Agriculture</p>
                </div>
            </div>
          </div>
          {/* <div className="slide bg-green-300">
                <h1 className="text-5xl font-bold">Hello Thre</h1>
                <p className="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae amet exercitationem cumque alias nam obcaecati omnis, error ab ipsam ratione dicta eius aut quam voluptates porro iusto nostrum maxime dolorem.</p>
          </div>
          <div className="slide bg=sky-500">
                <h1 className="text-5xl font-bold">Hello Whatrrsbgf</h1>
                <p className="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae amet exercitationem cumque alias nam obcaecati omnis, error ab ipsam ratione dicta eius aut quam voluptates porro iusto nostrum maxime dolorem.</p>
          </div>
          <div className="slide bg-indigo-400">
                <h1 className="text-5xl font-bold">Hello World</h1>
                <p className="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae amet exercitationem cumque alias nam obcaecati omnis, error ab ipsam ratione dicta eius aut quam voluptates porro iusto nostrum maxime dolorem.</p>
          </div> */}
        </SlickSlider>
      </div>
    );
}
