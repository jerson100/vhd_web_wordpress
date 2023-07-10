/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["./src/**/*.{html,js}"],
  content: ["./src/**/*.{html,js}", "./page-template/**/*.php", "./**/*.php"],
  theme: {
    extend: {
      screens: {
        desktop: "1500px",
        // => @media (min-width: 1500px) { ... }
      },
      gridTemplateColumns: {
        fluid: "repeat(auto-fit, minmax(420px, 1fr))",
      },
      fontFamily: {
        roboto: ["Roboto", "Arial", "sans-serif"],
        lora: ["Lora", "Times New Roman", "serif"],
      },
      colors: {
        "text-primary": "#000000",
        black: "#000000",
        "text-secondary": "#161615",
        "text-nav": "#111111",
        "btn-primary": "#000000",
        "white-50": "#00000000",
        "white-100": "#FFFFFF00",
        "white-150": "#FFFFFF",
        "gray-50": "#F2F2F2",
        "gray-100": "#E4E4E4",
        "gray-150": "#00000029",
        "gray-200": "#D2D2D2",
        "gray-250": "#B3B3B3",
        "green-10": "#CCEBD1",
        "green-50": "#57D163",
        "green-100": "#23B33A",
        "green-150": "#009A17",
        celeste: "#E5F5E8",
        black: "#000000",
        dark: "#111111",
        darkest: "#161615",
      },
      boxShadow: {
        custom: "0 3px 6px #00000029",
      },
    },
  },
  plugins: [],
};
