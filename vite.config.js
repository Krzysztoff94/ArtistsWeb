import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/layout.css',
                'resources/css/login.css', // Dodaj plik login.css tutaj
                'resources/js/app.js',
				'resources/css/home.css'
            ],
            refresh: true,
        }),
    ],
});
