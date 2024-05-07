/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        fontFamily: {
            alata: ['Alata', 'sans-serif'],
            arimo: ['Arimo', 'sans-serif'],
        },
        colors: {
            'primary': '#C0CC30',
            'secondary': '#1D1D1B',
        }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

