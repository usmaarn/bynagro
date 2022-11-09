import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

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
      <div className="relative h-[calc(100vh_-_130px)]">
{/*
        <div className="absolute z-10 top-0 left-0 bg-black/60 h-full p-5 w-full flex flex-col gap-3 items-center justify-center">
            <h1 className="text-7xl md:text-9xl font-black relative">
                BYN
                <p className='absolute top-0 left-full whitespace-nowrap text-sm md:text-xl text-yellow-500 lining-nums'>RC: 1418600</p>
            </h1>
            <h3 className="text-3xl md:text-4xl">AGRO ALLIED NIG LTD.</h3>
            <p className="text-2xl md:text-3xl">We Can Change With Agriculture</p>
        </div> */}

        <SlickSlider {...settings}>
            <div className="slide opacity-10">
                <img data-src="images/slideshow/cattle.jpg" alt="image" className="load-img object-cover w-full h-full" />
                <div className="">
                    Importer and Exporter of Agro
                </div>
            </div>
            <div className="slide">
                <img data-src="images/slideshow/cashewnut.jpg" alt="image" className="load-img object-cover w-full h-full" />
            </div>
            <div className="slide">
                <img data-src="images/slideshow/ginger.jpg" alt="image" className="load-img object-cover w-full h-full" />
            </div>
            <div className="slide">
                <img data-src="images/slideshow/grains.jpg" alt="image" className="load-img object-cover w-full h-full" />
            </div>
            <div className="slide">
                <img data-src="images/slideshow/moringa.jpg" alt="image" className="load-img object-cover w-full h-full" />
            </div>
            <div className="slide">
                <img data-src="images/slideshow/rice.jpg" alt="image" className="load-img object-cover w-full h-full" />
            </div>
        </SlickSlider>
      </div>
    );
}
