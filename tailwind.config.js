const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./content/index.html'],
  theme: {
    extend: {},
    colors: {...colors}
  },
  plugins: [],
}
