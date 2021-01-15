const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Proxima Nova', ...defaultTheme.fontFamily.sans],
        },
    }
  },
  variants: {},
}
