/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: "#61442C",
          "100": "#875C34",
          "200": "#F3E5CF",
          "300": "#CCB591",
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
        body: ['Poppins', 'Sans-serif'],
      },
      fontSize: {
        header: '18px',
      },
      gridTemplateColumns: {
        'header-desktop': '1fr 3fr 1fr',
        'header-mobile': '1fr 1fr',
      },
    },
  },
  plugins: [],
  safelist: [
    'paragraph-text',
    'heading-text'
  ]
};

export default config;
