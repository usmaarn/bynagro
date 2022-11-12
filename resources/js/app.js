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

import ExampleComponent from "./components/ExampleComponent.vue";
import Slider from "./components/Slider.vue";

app.component("example-component", ExampleComponent);
app.component("slider-component", Slider);

app.mount("#app");
