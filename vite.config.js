import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/normalize.css', 'resources/js/app.js','resources/js/bootstrap.js','resources/js/gallery.js', 'resources/js/main.js'],
            refresh: true,
        }),
    ],

    resolve: {
        alias: {
            swiper: 'swiper/swiper-bundle.min.js',
        }
    },
    server: {
        port: 3000, // Cambia a cualquier puerto libre
      },



});
