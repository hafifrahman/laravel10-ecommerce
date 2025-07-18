import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'node:path';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  resolve: {
    alias: {
      '@asset': resolve(__dirname, 'public'),
    },
  },
});
