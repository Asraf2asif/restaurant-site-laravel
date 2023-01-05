const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./vendor/laravel/jetstream/**/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Nunito", ...defaultTheme.fontFamily.sans],
        "sans-lato": ["Lato", ...defaultTheme.fontFamily.sans],
        "sans-monts": ["Montserrat", ...defaultTheme.fontFamily.sans],
        "cursive-dance": ['"Dancing Script"', "cursive"],
        "cursive-marck": ['"Marck Script"', "cursive"],
        "cursive-merie": ["Merienda", "cursive"],
      },
      zIndex: {
        1: "1",
        n1: "-1",
      },
      screens: {
        "food-sm": "966px",
      },
    },
  },

  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
};
