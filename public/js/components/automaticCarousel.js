import { $ } from '../utils/index.js'

// Automatic carousel
const carouselWrapper = $({ selector: '.automatic__carousel' })
const carouselSlider = $({ selector: '.automatic__carousel-slider', element: carouselWrapper })
const numSlidesCarousel = $({ selector: '.automatic__carousel-slide', element: carouselWrapper, multiple: true }).length
const btnsRadio = $({ selector: '.automatic-carousel__navigation input', multiple: true, element: carouselWrapper })

let currentSlideCarousel = 0
function changeSlideCarousel () {
  const porcentage = currentSlideCarousel * 100
  carouselSlider.style.transform = `translateX(-${porcentage}%)`
}

setInterval(() => {
  currentSlideCarousel += 1
  if (currentSlideCarousel >= numSlidesCarousel) currentSlideCarousel = 0
  btnsRadio[currentSlideCarousel].checked = true
  changeSlideCarousel()
}, 5000)

btnsRadio.forEach((btn, index) => btn.addEventListener('change', () => {
  currentSlideCarousel = index
  changeSlideCarousel()
}))
