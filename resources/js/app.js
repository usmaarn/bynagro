import "./bootstrap";
import { createApp } from "vue";

const app = createApp({
    data() {
        return {
            openNavbar: false,
        }
    },
    methods: {

    }
});

import Slider from "./components/Slider.vue";
app.component("slider-component", Slider);

app.mount("#app");
