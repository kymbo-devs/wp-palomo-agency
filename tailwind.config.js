/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: {
          "default": "#61442C",
          "100": "#875C34",
        }
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
