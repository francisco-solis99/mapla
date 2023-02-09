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
          },
          light: {
            100: '#F3F0F6',
            200: '#FBF7FF'
          }
        }
      },
      backgroundImage: {
        'hero-slide-1': "url('../images/home/mapla-slider-1.webp')",
        'newsletter-back': "url('../images/home/newsletter.webp')",
        'promotions-back': "url('../images/promotions/promotions-header.webp')",
        'contact-back': "url('../images/contact/contact-2x.webp')",
        'about-back': "url('../images/about/about.webp')",
        'leafs-back': "url('../images/about/leafs.webp')",
        'catalogue-back': "url('../images/catalogue/catalogue.webp')"
      }
    }
  },
  plugins: []
}
