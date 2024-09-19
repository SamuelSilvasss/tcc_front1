// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        manifest: true, // Garante que o manifest.json seja gerado
        outDir: 'public/build', // Define o diretório de saída
        rollupOptions: {
            output: {
                chunkFileNames: 'js/[name].js',
                entryFileNames: 'js/[name].js',
                assetFileNames: 'assets/[name].[ext]',
            },
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
