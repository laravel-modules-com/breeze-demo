import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import collectModuleAssetsPaths from './vite-module-loader.js';
import tailwindcss from '@tailwindcss/vite';

async function getConfig() {
    const paths = [];
    const allPaths = await collectModuleAssetsPaths(paths, 'Modules');

    return defineConfig({
        plugins: [
            laravel({
                input: allPaths,
                refresh: true,
            }),
            tailwindcss(),
        ]
    });
}

export default getConfig();