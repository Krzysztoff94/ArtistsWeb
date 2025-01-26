import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php', // Dla plików Blade
    './resources/js/**/*.js', // Dla plików JS
    './resources/css/**/*.css', // Jeśli używasz niestandardowego CSS
    './resources/**/*.vue', // Dla plików Vue
],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
