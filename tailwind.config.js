const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.jsx",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Cormorant Garamond", ...defaultTheme.fontFamily.sans],
                maison: ["Maison Neue"],
                poppins: ["Poppins"]
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
