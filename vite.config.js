import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // build: {
    //     outDir: 'public_html/build', // aqui você muda o caminho do build
    //     manifest: true,
    //     emptyOutDir: true,
    // },
    // base: 'public_html/build', // base pública para acessar os arquivos
});
