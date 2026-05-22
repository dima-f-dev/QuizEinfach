module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./**/**/*.php",
    "./**/*.html"
  ],
  safelist: [
    'has-[:checked]:bg-green-100',
    'has-[:checked]:border-green-500',
   ],
  theme: {
    extend: {},
  },
  plugins: [],
}