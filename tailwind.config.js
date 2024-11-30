import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        'node_modules/preline/dist/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'sage1': '#4335A7',
            'sage2': '#80C4E9',
            'sage3': '#FF7F3E',
            'sage4': '#FFF6E9',

            'dark1': '#181C14',
            'dark2': '#80C4E9',
            'dark3': '#FF7F3E',
            'dark4': '#FFF6E9',
          },
    },
    plugins: [
        require('preline/plugin'),
    ],
};
