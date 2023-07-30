import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/thor_network.css',
                'resources/js/thor_network.js',
                'resources/css/nucleo-icons.css',
                'resources/css/nucleo-svg.css',
                'resources/assets/css/argon-dashboard.css',
                'resources/js/core/popper.min.js',
                'resources/js/core/bootstrap.min.js',
                'resources/js/plugins/perfect-scrollbar.min.js',
                'resources/js/plugins/smooth-scrollbar.min.js',
                'resources/js/plugins/chartjs.min.js'
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
