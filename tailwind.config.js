/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: "#61442C",
          "100": "#875C34",
        },
        secondary: {
          DEFAULT: "#FFFFFF",
          "100": "#FFFCF4",
        },
        accent: {
          DEFAULT: "#BDF1FD",
        },
      },
      fontFamily: {
        body: ['poppins'],
      },
      fontSize: {
        header: '20px',
      },
      gridTemplateColumns: {
        'header-desktop': '1fr 3fr 1fr',
      },
    },
  },
  plugins: [],
};

export default config;
