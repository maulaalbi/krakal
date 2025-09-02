import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true
      // Hapus buildDirectory: 'dist' untuk menggunakan default 'public/build'
    }),
    tailwindcss(),
  ],
  build: {
    // Hapus outDir: 'dist' untuk menggunakan default 'public/build'
    manifest: true // Pastikan manifest dihasilkan untuk Laravel
  }
});
