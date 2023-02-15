import { $ } from '../utils/index.js'

const selectLocation = $({ selector: '#select-location' })
const locations = $({ selector: '.location', multiple: true })
const iframeMap = $({ selector: '#mapla-map' })

// Appear the location selected and dissapear the rest are not selected
function toggleLocations (locationName) {
  locations.forEach(location => {
    const containerLocation = location.parentElement
    const name = location.dataset.shop
    if (name === locationName) {
      containerLocation.classList.remove('hidden')
      containerLocation.classList.add('block')
      return
    }
    containerLocation.classList.add('hidden')
    containerLocation.classList.remove('block')
  })
}

selectLocation.addEventListener('change', (e) => {
  const nameLocation = e.target.value
  toggleLocations(nameLocation)
})

// Chnage the map according to the button pressed
locations.forEach(location => location.addEventListener('click', (e) => {
  if (!(e.target.matches('.location__btn-map'))) return
  const coords = location.dataset.coords
  iframeMap.src = `https://www.google.com/maps/embed?pb=${coords}`
}))
