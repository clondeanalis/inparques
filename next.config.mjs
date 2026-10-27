/** @type {import('next').NextConfig} */
const nextConfig = {
  output: 'export',
  // Si utilizas imágenes con next/image, añade también:
  images: {
    unoptimized: true,
  },
};

export default nextConfig;