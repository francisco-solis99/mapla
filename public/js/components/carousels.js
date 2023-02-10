
const productsCarousel = new Splide('.splide', {
  pagination: false,
  type: 'loop',
  perPage: 3,
  breakpoints: {
    768: {
      perPage: 2
    },
    468: {
      perPage: 1
    }
  }

})

productsCarousel.mount()
