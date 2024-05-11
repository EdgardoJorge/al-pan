/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      brown: '#9c6644',
      brownSecundary: '#7f5539',
      grayDebil: '#CFCFCF',
      grayFuerte: '#777777',
      white: '#FFFFFF',
      black: '#000000',
      red: '#ff0000',
    },
  },
  plugins: [],
}

