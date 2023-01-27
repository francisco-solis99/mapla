/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./app/Views/**/*.{html,js,php}'],
  theme: {
    extend: {
      fontFamily: {
        roboto: ['Roboto', 'sans-serif'],
        ubuntu: ['Ubuntu', 'sanf-serif']
      },
      colors: {
        mapla: {
          green: {
            100: '#81DF3B',
            200: '#2B5D06'
          },
          purple: {
            100: '#9336FD',
            200: '#5600B9'
          },
          orange: {
            100: '#FD7341'
          },
          dark: {
            100: '#535F69',
            200: '#21252A'
          }
        }
      },
      backgroundImage: {
        'newsletter-back': "url('/images/home/newsletter.webp')"
      }
    }
  },
  plugins: []
}
