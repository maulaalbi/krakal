import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
      buildDirectory: 'dist', // Pastikan output ke 'dist'
      publicDirectory: 'public' // Tetap gunakan 'public' untuk aset publik Laravel
    }),
    tailwindcss(),
  ],
  build: {
    outDir: 'dist', // Selaras dengan buildDirectory
    emptyOutDir: true, // Hapus konten lama di 'dist' sebelum build baru
    manifest: true // Pastikan manifest dihasilkan untuk kompatibilitas Laravel
  }
});
