import { $ } from '../utils/index.js'

// Carousel of the hero
const carouselWrapper = $({ selector: '.horizontal__carousel' })
const carouselSlider = $({ selector: '.horizontal__carousel-slider', element: carouselWrapper })
const numSlidesCarousel = $({ selector: '.horizontal__carousel-slide', element: carouselWrapper, multiple: true }).length
const btnCarouselPrev = $({ selector: '.horizontal__carousel-prev', element: carouselWrapper })
const btnCarouselNext = $({ selector: '.horizontal__carousel-next', element: carouselWrapper })
let currentSlide = 0

btnCarouselNext.addEventListener('click', () => {
  currentSlide += 1
  if (currentSlide >= numSlidesCarousel) currentSlide = 0
  const porcentage = currentSlide * 100
  carouselSlider.style.transform = `translateX(-${porcentage}%)`
})

btnCarouselPrev.addEventListener('click', () => {
  currentSlide -= 1
  if (currentSlide < 0) currentSlide = numSlidesCarousel - 1
  const porcentage = currentSlide * 100
  carouselSlider.style.transform = `translateX(-${porcentage}%)`
})
