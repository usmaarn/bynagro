import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";


import React, { Component } from "react";
import SlickSlider from "react-slick";

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


    return (
      <div className="">
        <SlickSlider {...settings}>
          <div className="h-[calc(100vh_-_200px)] flex items-center justify-center flex-col p-10 space-y-5 text-center bg-red-300">
                <h1 className="text-5xl font-bold">Hello World</h1>
                <p className="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae amet exercitationem cumque alias nam obcaecati omnis, error ab ipsam ratione dicta eius aut quam voluptates porro iusto nostrum maxime dolorem.</p>
          </div>
          <div className="h-[calc(100vh_-_200px)] flex items-center justify-center flex-col p-10 space-y-5 text-center bg-green-300">
                <h1 className="text-5xl font-bold">Hello Thre</h1>
                <p className="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae amet exercitationem cumque alias nam obcaecati omnis, error ab ipsam ratione dicta eius aut quam voluptates porro iusto nostrum maxime dolorem.</p>
          </div>
          <div className="h-[calc(100vh_-_200px)] flex items-center justify-center flex-col p-10 space-y-5 text-center bg=sky-500">
                <h1 className="text-5xl font-bold">Hello Whatrrsbgf</h1>
                <p className="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae amet exercitationem cumque alias nam obcaecati omnis, error ab ipsam ratione dicta eius aut quam voluptates porro iusto nostrum maxime dolorem.</p>
          </div>
          <div className="h-[calc(100vh_-_200px)] flex items-center justify-center flex-col p-10 space-y-5 text-center bg-indigo-400">
                <h1 className="text-5xl font-bold">Hello World</h1>
                <p className="text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae amet exercitationem cumque alias nam obcaecati omnis, error ab ipsam ratione dicta eius aut quam voluptates porro iusto nostrum maxime dolorem.</p>
          </div>
        </SlickSlider>
      </div>
    );
}
