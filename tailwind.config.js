import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                'alata' : ['Alata', ...defaultTheme.fontFamily.sans],
                'arimo' : ['Arimo', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'primary' : '#C0CC30',
                'secondary' : '#1D1D1B',
                'tertiary' : '#BDBDBD',
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};
