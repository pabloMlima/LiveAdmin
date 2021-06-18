const colors = require('tailwindcss/colors')

module.exports = {
  mode: 'jit',
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        indigo: colors.indigo,
        rose: colors.rose,
        blueGray: colors.blueGray,
        lightBlue: colors.lightBlue,
        orange: colors.orange,
        red: colors.red,
        pink: {
            light: '#ff7ce5',
            DEFAULT: '#ff49db',
            dark: '#ff16d1',
          },
          blue: {
            450: '#5F99F7'
          },
      },
      order: {
        first: '-9999',
        last: '9999',
       none: '0',
       normal: '0',
        '1': '1',
        '2': '2',
        '3': '3',
        '4': '4',
        '5': '5',
        '6': '6',
       '7': '7',
       '8': '8',
       '9': '9',
       '10': '10',
       '11': '11',
       '12': '12',
      },
      minHeight: {
        'screen-75': '75vh'
      },
      fontSize: {
        '55': '55rem'
      },
      opacity: {
        '80': '.8'
      },
      zIndex: {
        '2': 2,
        '3': 3
      },

      margin:{
        'mt-30': 'margin-top: 5rem',
        'mt-40': 'margin-top: 10rem',
        'mt-45': 'margin-top: 15rem',
        'm-16': 'margin: 4rem'
      },

      flex:{
          'flex-1': 'flex: 1 1 0%',
          'flex-auto': 'flex: 1 1 auto',
          'flex-initial': 'flex: 0 1 auto',
          'flex-none': 'flex: none'
      },
      inset: {
        '-100': '-100%',
        '-225-px': '-225px',
        '-160-px': '-160px',
        '-150-px': '-150px',
        '-94-px': '-94px',
        '-50-px': '-50px',
        '-29-px': '-29px',
        '-20-px': '-20px',
        '25-px': '25px',
        '40-px': '40px',
        '95-px': '95px',
        '145-px': '145px',
        '195-px': '195px',
        '210-px': '210px',
        '260-px': '260px'
      },
      height: {
        '95-px': '95px',
        '70-px': '70px',
        '350-px': '350px',
        '500-px': '500px',
        '600-px': '600px'
      },
      maxHeight: {
        '860-px': '860px'
      },
      maxWidth: {
        '100-px': '100px',
        '120-px': '120px',
        '150-px': '150px',
        '180-px': '180px',
        '200-px': '200px',
        '210-px': '210px',
        '580-px': '580px'
      },
      minWidth: {
        '140-px': '140px',
        '48': '12rem'
      },
      backgroundSize: {
        full: '100$'
      },
      gridTemplateColumns: {
        // Simple 16 column grid
       '16': 'repeat(16, minmax(0, 1fr))',

        // Complex site-specific column configuration
       'footer': '200px minmax(900px, 1fr) 100px',
      }
    }
  },
  variants: [
    'responsive',
    'group-hover',
    'focus-within',
    'first',
    'last',
    'odd',
    'even',
    'hover',
    'focus',
    'active',
    'visited',
    'disabled'
  ],
  plugins: [require('@tailwindcss/forms')]
}
