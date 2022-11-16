import "./bootstrap";
import { createApp } from "vue";

const services = [
    {
        title: "Importation & Exportation of Agro Allied Products",
        icon: "/icons/importer.svg",
    },
    {
        title: "Drilling of boreholes and equipping",
        icon: "/icons/well.svg",
    },
    {
        icon: "/icons/agro-circle.svg",
        title: "supply of agriculture and agro allied products",
    },
    {
        icon: "/icons/tractor.svg",
        title: "manufacturer's representatives for companies and indvidual proprietors",
    },
    {
        icon: "/icons/tractor.svg",
        title: "general contractors",
    },
    {
        icon: "/icons/cart.svg",
        title: "buying and selling of general goods and services",
    },
    {
        icon: "/icons/importer.svg",
        title: "importer and exporter of retails on building materials",
    },
    {
        icon: "/icons/sofa.svg",
        title: "dealers on furnitures and general merchandising",
    },
];

const app = createApp({
    data() {
        return {
            openNavbar: false,
            services,
        }
    },
    methods: {

    }
});

import Slider from "./components/Slider.vue";
app.component("slider-component", Slider);

app.mount("#app");
