/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.{html,js,php}'],
  theme: {
    extend: {
      colors: {
        'orange-1': '#FE5301',
        'green-1': '#044B05',
        'color-2': '#EFAF29',
        'color-3': '#EAF6EC',
        'color-4': '#C4C4C41A',
        'color-5': '#EEAE28',
        'color-6': '#034B04',
        'color-7': '#FFD600',
        'color-8': '#034B04',
        'color-9': '#FF0000',
        'color-10': '#1E3322',
      },
      width: {
        'w-ban': '350px',
      },
      height: {
        'h-ban': '250px',
      },
    },
  },
  plugins: [],
}
