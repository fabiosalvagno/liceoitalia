import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                'resources/js/app.js',
                'resources/css/swiper.css',
                'resources/js/swiper.js',
            
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
