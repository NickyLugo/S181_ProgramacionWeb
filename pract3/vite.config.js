import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
/* Comenzamos con una importación */
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
            /* Aquí ponemos el código para la importación del bootstrap 5 */
            // Importamos Bootstrap 5
            resolve:{
                alias:{
                    '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
                }
            },
            // Fin Importamos Bootstrap 5
        }),
    ],
});
