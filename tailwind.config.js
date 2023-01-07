const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js',
    ],

    theme: {
        container: {
            center: true,
        },
        extend: {
            colors: {
                primary: '#10577a',
                second: '#5589a3',
                third: '#38a5dd',
                blueazure: '#93c5fd',
                hovering: '#7dd3fc',
            },
            screens: {
                '2xl': '1320px'
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('tw-elements/dist/plugin'),
    ],
};
