/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./templates/*.php",
    "./src/**/*.{html,js}",
  ],
  theme: {
    extend: {
      screens: {
        sm: "640px", // Mobile nhỏ
        md: "768px", // Tablet
        lg: "1024px", // Laptop nhỏ
        xl: "1280", // Desktop
        "2xl": "1536px", // Màn hình lớn
      },
      container: {
        center: true, // Đảm bảo container luôn căn giữa
        padding: {
          DEFAULT: "1.5rem", // Padding mặc định
          // sm: "1.5rem",  // Padding cho màn hình nhỏ
          // md: "1.5rem",  // Padding cho màn hình trung bình
          // lg: "1rem",  // Padding cho màn hình lớn
          // xl: "1rem",  // Padding cho màn hình rất lớn
          // "2xl": "1rem", // Padding cho màn hình cực lớn 
        },
      },
      maxWidth: {
        container: "1360px", 
      },
      fontFamily: {
        sans: ["Gilroy", "sans-serif" ],
      },
    },
  },
  plugins: [],
}
