module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {}
  },
    variants: {
        extend: {
            padding: ['hover'],
        }
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
