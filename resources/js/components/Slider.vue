<template>
    <swiper
        :pagination="{
            dynamicBullets: true,
            clickable: true,
        }"
        :autoplay="{
            delay: 2500,
            disableOnInteraction: false,
        }"
        :modules="modules"
        :effect="'fade'"
        :loop="true"
        class="mySwiper"
    >
        <swiper-slide>
            <img src="/images/slides/cows.jfif" alt="" />
            <div class="content text-left">
                <h1 class="heading">Hello from this side</h1>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est,
                    error consequatur rerum optio rem reprehenderit placeat id sunt,
                    cupiditate facilis ducimus cum labore ab facere quasi laudantium, obcaecati voluptatibus quo!
                </p>
                <a href="#" class="link">
                    Learn More <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </swiper-slide>
        <swiper-slide>
            <img src="/images/slides/ginger.jpg" alt="" />
            <div class="content text-left">
                <h1 class="heading">Lorem ipsum, dolor sit amet consectetur adipisicing.</h1>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est,
                    error consequatur rerum optio rem reprehenderit placeat id sunt,
                    cupiditate facilis ducimus cum labore ab facere quasi laudantium, obcaecati voluptatibus quo!
                </p>
                <a href="#" class="link">
                    Learn More <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </swiper-slide>
        <swiper-slide>
            <img src="/images/slides/grains.jpg" alt="" />
            <div class="content text-left">
                <h1 class="heading">Lorem ipsum dolor sit amet consectetur adipisi</h1>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est,
                    error consequatur rerum optio rem reprehenderit placeat id sunt,
                    cupiditate facilis ducimus cum labore ab facere quasi laudantium, obcaecati voluptatibus quo!
                    Lorem ipsum dolor sit amet.
                </p>
                <a href="#" class="link">
                    Learn More <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </swiper-slide>
    </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/effect-fade";

// import required modules
import { Autoplay, EffectFade, Pagination, Navigation } from "swiper";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Autoplay, Pagination, Navigation],
        };
    },
};
</script>
