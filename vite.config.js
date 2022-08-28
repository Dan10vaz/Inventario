import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import livewire from '@defstudio/vite-livewire-plugin'; // <-- import

export default defineConfig({
    //...

    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),

        livewire({
            // refresh css (tailwind ) as well
            refresh: ['resources/css/app.css'],
        }),
    ],
});
