// tailwind.config.js
module.exports = {
  future: {
    removeDeprecatedGapUtilities: true,
  },
  variants: {
    padding: ['responsive', 'last', 'hover', 'focus'],
  },
  theme: {
    extend: {
      colors: {
        'primary': '#fff200',
        'secondary': '#ffffff',
        'tertiary': '#1c1c1d',
        'tertiary-light': '#29292b',
        'tertiary-bright': '#3d3d3d',
        'light-gray': '#767676',
        'lightest-gray': '#f2f2f2',
        'tan': '#858075',
      },
      maxWidth: {
        'logo': '10rem',
        'xxs': '12rem',
      },
      fontSize: {
        '2.5xl': '1.75rem',
      },
      width: {
        '36': '9rem',
        '40': '10rem',
        '80': '20rem',
        '96': '24rem',
        '112': '28rem',
        '128': '32rem',
        '144': '36rem',
        '192': '48rem',
        '224': '56rem',
        '256': '64rem',
        '1/10': '10%',
        '3/8': '37.5%',
        '5/8': '62.5%',
      },
      height: {
        '1/2': '50%',
        '36': '9rem',
        '40': '10rem',
        '80': '20rem',
        '96': '24rem',
        '104': '26rem',
        '112': '28rem',
        '128': '32rem',
        '144': '36rem',
        '160': '40rem',
        '192': '48rem',
        '224': '56rem',
        '256': '64rem',
      },
      padding: {
        '7': '1.75rem',
        '80': '20rem',
        '96': '24rem',
        '112': '28rem',
        '128': '32rem',
      },
      margin: {
        '7': '1.75rem',
        '80': '20rem',
        '196': '24rem',
        '112': '28rem',
        '128': '32rem',
      },
      lineHeight: {
        'less': '.85',
        'mid': '1.6',
        'more': '2.75',
      },
      fontFamily: {
        'body': ['Lato', 'Open Sans'],
      },
      transitionDuration: {
        '0': '0ms',
        '250': '250ms',
      }
    },
  },
}
