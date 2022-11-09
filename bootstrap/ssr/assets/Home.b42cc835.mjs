import SlickSlider from "react-slick";
import { j as jsxs, a as jsx, F as Fragment } from "../ssr.mjs";
import { useEffect } from "react";
import { BiSearch } from "react-icons/bi";
import "react-dom/server";
import "@inertiajs/inertia-react";
import "process";
import "http";
import "react/jsx-runtime";
const slick = "";
const slickTheme = "";
function Slider() {
  const settings = {
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    draggable: true,
    fade: true
  };
  return /* @__PURE__ */ jsxs("div", {
    className: "relative h-[calc(100vh_-_130px)] text-white",
    children: [/* @__PURE__ */ jsxs("div", {
      className: "absolute z-10 top-0 left-0 bg-black/60 h-full p-5 w-full flex flex-col gap-3 items-center justify-center",
      children: [/* @__PURE__ */ jsxs("h1", {
        className: "text-7xl md:text-9xl font-black relative",
        children: ["BYN", /* @__PURE__ */ jsx("p", {
          className: "absolute top-0 left-full whitespace-nowrap text-sm md:text-xl text-yellow-500 lining-nums",
          children: "RC: 1418600"
        })]
      }), /* @__PURE__ */ jsx("h3", {
        className: "text-3xl md:text-4xl",
        children: "AGRO ALLIED NIG LTD."
      }), /* @__PURE__ */ jsx("p", {
        className: "text-2xl md:text-3xl",
        children: "We Can Change With Agriculture"
      })]
    }), /* @__PURE__ */ jsxs(SlickSlider, {
      ...settings,
      children: [/* @__PURE__ */ jsx("div", {
        className: "slide opacity-10",
        children: /* @__PURE__ */ jsx("img", {
          "data-src": "images/slideshow/cattle.jpg",
          alt: "image",
          className: "load-img object-cover w-full h-full"
        })
      }), /* @__PURE__ */ jsx("div", {
        className: "slide",
        children: /* @__PURE__ */ jsx("img", {
          "data-src": "images/slideshow/cashewnut.jpg",
          alt: "image",
          className: "load-img object-cover w-full h-full"
        })
      }), /* @__PURE__ */ jsx("div", {
        className: "slide",
        children: /* @__PURE__ */ jsx("img", {
          "data-src": "images/slideshow/ginger.jpg",
          alt: "image",
          className: "load-img object-cover w-full h-full"
        })
      }), /* @__PURE__ */ jsx("div", {
        className: "slide",
        children: /* @__PURE__ */ jsx("img", {
          "data-src": "images/slideshow/grains.jpg",
          alt: "image",
          className: "load-img object-cover w-full h-full"
        })
      }), /* @__PURE__ */ jsx("div", {
        className: "slide",
        children: /* @__PURE__ */ jsx("img", {
          "data-src": "images/slideshow/moringa.jpg",
          alt: "image",
          className: "load-img object-cover w-full h-full"
        })
      }), /* @__PURE__ */ jsx("div", {
        className: "slide",
        children: /* @__PURE__ */ jsx("img", {
          "data-src": "images/slideshow/rice.jpg",
          alt: "image",
          className: "load-img object-cover w-full h-full"
        })
      })]
    })]
  });
}
function ApplicationLogo({
  className
}) {
  return /* @__PURE__ */ jsx("div", {
    className: "",
    children: /* @__PURE__ */ jsxs("a", {
      href: "/",
      className: "text-2xl md:text-3xl leading-[15px] md:leading-5",
      children: [/* @__PURE__ */ jsxs("p", {
        className: "tracking-widest font-black pt-2",
        children: ["BYN AGRO", /* @__PURE__ */ jsx("sup", {
          className: "text-sm text-red-500 lining-nums tracking-normal",
          children: "RC: 100677"
        })]
      }), /* @__PURE__ */ jsx("p", {
        className: "text-xs md:text-sm tracking-tighter font-medium",
        children: "We Can Change with Agriculture"
      })]
    })
  });
}
function PageNavbar() {
  return /* @__PURE__ */ jsxs("header", {
    className: "header h-[130px] sticky top-0 z-50 bg-white",
    children: [/* @__PURE__ */ jsxs("section", {
      className: "top h-[80px] p-5 flex items-center justify-between",
      children: [/* @__PURE__ */ jsx("div", {
        className: "flex items-center gap-5",
        children: /* @__PURE__ */ jsx(ApplicationLogo, {})
      }), /* @__PURE__ */ jsxs("div", {
        className: "flex items-center gap-5",
        children: [/* @__PURE__ */ jsx(BiSearch, {}), /* @__PURE__ */ jsx("a", {
          href: "/login",
          children: "Login"
        })]
      })]
    }), /* @__PURE__ */ jsxs("nav", {
      children: [/* @__PURE__ */ jsx("a", {
        href: "#",
        children: "Home"
      }), /* @__PURE__ */ jsx("a", {
        href: "#",
        children: "Products"
      }), /* @__PURE__ */ jsx("a", {
        href: "#",
        children: "Services"
      }), /* @__PURE__ */ jsx("a", {
        href: "#",
        children: "Blogs"
      }), /* @__PURE__ */ jsx("a", {
        href: "#",
        children: "About"
      }), /* @__PURE__ */ jsx("a", {
        href: "#",
        children: "Contact"
      })]
    })]
  });
}
function PageLayout({
  children
}) {
  return /* @__PURE__ */ jsxs(Fragment, {
    children: [/* @__PURE__ */ jsx(PageNavbar, {}), /* @__PURE__ */ jsx("div", {
      className: "",
      children
    })]
  });
}
function Home() {
  useEffect(() => {
    if (typeof window != "undefined") {
      let slides = document.querySelectorAll(".load-img");
      slides.forEach((slide) => {
        let img = slide.getAttribute("data-src");
        slide.src = img;
      });
    }
  });
  return /* @__PURE__ */ jsx(PageLayout, {
    children: /* @__PURE__ */ jsxs("div", {
      className: "space-y-10",
      children: [/* @__PURE__ */ jsx(Slider, {}), /* @__PURE__ */ jsxs("div", {
        className: "p-5 md:p-24 text-center space-y-5",
        children: [/* @__PURE__ */ jsx("h1", {
          className: "text-4xl md:text-5xl",
          children: "Welcome"
        }), /* @__PURE__ */ jsx("p", {
          className: "md:text-2xl",
          children: "The government's intervention in the Agro - allied sector must essentially be aimed at creating the right environment for rapid expansion of locally - owned enterprises. However, there are serious challenges in this direction. Industries processing of agricultural product are almost negligible, existing standards being very basic and often incomparable with export requirements. Post - harvest losses are also very high, assesses at near 50% of total production. (Van Buren) Labour saving production and advanced harvesting and processing technologies are therefore critical for sustained revival of Nigerians Agriculture."
        })]
      }), /* @__PURE__ */ jsxs("div", {
        className: "relative skew-y-1 bg-black overflow-hidden",
        children: [/* @__PURE__ */ jsx("img", {
          "data-src": "/images/slideshow/grains.jpg",
          className: "load-img absolute left-0 top-0 scale-110 -z-10 opacity-50 h-full w-full object-fill",
          alt: ""
        }), /* @__PURE__ */ jsx("div", {
          className: "md:w-1/2 bg-green-500/60 px-5 py-10 md:p-24 md:float-right",
          children: /* @__PURE__ */ jsxs("div", {
            className: "-skew-y-3 space-y-10",
            children: [/* @__PURE__ */ jsx("h1", {
              className: "text-4xl font-black",
              children: "What We Do"
            }), /* @__PURE__ */ jsx("p", {
              className: "text-2xl font-bold",
              children: "Importation and exportation of agro allied products is our first objective, We are also into drilling of borehole and equipping, supply of agricultural and agro allied products, manufacturer's representatives for companies and indvidual proprietors, general contractors, buying and selling of general goods and services, importer, exporter of retails on building matenal, dealers on furniture and general merchandising"
            })]
          })
        })]
      }), /* @__PURE__ */ jsx("div", {
        className: ""
      })]
    })
  });
}
export {
  Home as default
};
