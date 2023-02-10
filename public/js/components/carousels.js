const productsCarousel = new Splide('.products__carousel', {
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
