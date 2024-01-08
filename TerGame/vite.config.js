import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/carousel.css',
                'resources/css/styles.css',
                'resources/css/rating.css',
                'resources/css/gameStyle.css',
                'resources/js/app.js',
                'resources/js/script.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
});
