const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    lifht: "#2D49AE",
                    DEFAULT: "#23305F"
                },
                secondary: "#47CB93",
                tertiary: {
                    light: "#E8E8E8",
                    DEFAULT: "#6DD5A9"
                },
                accent: "#C0BEFF",

            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
