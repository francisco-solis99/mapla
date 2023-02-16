import { $ } from '../utils/index.js'

const select = $({ selector: '.map__select' })
const selectedLocation = $({ selector: '.map__selected' })
const selectMapsOptions = $({ selector: '.map__option', multiple: true })
const dropdownMap = $({ selector: '.map__dropdown' })

const locations = $({ selector: '.location', multiple: true })
const iframeMap = $({ selector: '#mapla-map' })

// Open and close the select and dropdown with the optioins
select.addEventListener('click', () => {
  dropdownMap.classList.toggle('hidden')
  dropdownMap.classList.toggle('block')
})

// Change the selected Map when click an option map
selectMapsOptions.forEach(option => option.addEventListener('click', () => {
  const valueMap = option.textContent.trim()
  selectedLocation.textContent = valueMap
  console.log(valueMap)
  toggleLocations(valueMap)
}))

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

// Chnage the map according to the button pressed
locations.forEach(location => location.addEventListener('click', (e) => {
  if (!(e.target.matches('.location__btn-map'))) return
  const coords = location.dataset.coords
  iframeMap.src = `https://www.google.com/maps/embed?pb=${coords}`
}))
