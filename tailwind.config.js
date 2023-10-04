/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],// all phpfiles that need styling 
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ], // form styles 
}

