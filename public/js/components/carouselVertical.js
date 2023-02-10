// Automatic carousel
const carouselWrapper = document.querySelector('.vertical__carousel')
const numSlidesCarousel = document.querySelectorAll('.vertical__carousel article').length
const btnsRadio = document.querySelectorAll('.vertical__navigation input')

let currentSlideCarousel = 0
function changeSlideCarousel () {
  const porcentage = currentSlideCarousel * 100
  carouselWrapper.style.transform = `translateY(-${porcentage}%)`
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
