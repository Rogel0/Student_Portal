/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      screens: {
        sm: '375px',
        md: '1024px',
        lg: '1440px',
      },
    },
  },
  plugins: [],
}