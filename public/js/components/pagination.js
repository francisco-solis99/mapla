import { $, toggleCSSclasses } from '../utils/index.js'

const pagination = $({ selector: '.pagination' })
const pages = $({ selector: '.pagination__page', multiple: true, element: pagination })
const prevPageBtn = $({ selector: '.pagination__prev', element: pagination })
const nextPageBtn = $({ selector: '.pagination__next', element: pagination })

const LIMIT = 5
const NUM_PAGES = pages.length
const TIMES_PAGINATION = Math.ceil(NUM_PAGES / LIMIT)
// Just in case to use it
const url = new URL(window.location.href)
// it is important the queryParam in the url named as page, but this can change
let currentPage = Number(url.searchParams.get('page')) || 1
console.log(currentPage)

renderInitailPagination()
nextPageBtn.addEventListener('click', nextTime)
prevPageBtn.addEventListener('click', prevTime)

function renderInitailPagination () {
  const pageLinkClasses = ['text-gray-500', 'bg-white', 'bg-mapla-dark-200', 'text-white']
  const currentPageElement = Array.from(pages).find((_, index) => currentPage === index + 1)
  console.log(currentPageElement.firstElementChild.classList)
  toggleCSSclasses(currentPageElement.firstElementChild, pageLinkClasses)

  showHideButtons()
  const initialMin = Math.floor(currentPage / LIMIT) * LIMIT + 1
  const initialMax = initialMin + LIMIT - 1
  console.log(initialMin, initialMax)
  showHidePages({ min: initialMin, max: initialMax })
}

function showHideButtons () {
  const currentTimePagination = getCurrentTimePagination()

  // Appear the btn nextBtn if there are more page than the limit const
  if (NUM_PAGES > LIMIT && currentTimePagination < TIMES_PAGINATION) nextPageBtn.classList.remove('hidden')

  // Appear the btn prevBtn if the current page is bigger than the LIMIT
  if (currentPage > LIMIT) {
    prevPageBtn.classList.remove('hidden')
  }

  // Dissapear the prev if the current time pagination is equal to 1 (because is the first amount and does not exist a prev amount of pages)
  if (currentTimePagination === 1) {
    prevPageBtn.classList.add('hidden')
  }

  // Dissapear the nextBtn if the current times is equal to the times pagination (because is the last ampunt of pages)
  if (currentTimePagination === TIMES_PAGINATION) {
    nextPageBtn.classList.add('hidden')
  }
}

function showHidePages ({ min, max }) {
  pages.forEach((page, index) => {
    if (index + 1 < min || index + 1 > max) {
      if (page.classList.contains('hidden')) return
      toggleCSSclasses(page, ['hidden'])
    } else {
      if (page.classList.contains('hidden')) toggleCSSclasses(page, ['hidden'])
    }

    // const pageLinkClasses = ['bg-mapla-dark-200', 'text-white']
    // if (currentPage === index + 1) {
    //   removeCSSclasses(page.firstElementChild, ['text-gray-500'])
    //   addCSSclasses(page.firstElementChild, pageLinkClasses)
    // } else {
    //   removeCSSclasses(page.firstElementChild, pageLinkClasses)
    //   addCSSclasses(page.firstElementChild, ['text-gray-500'])
    // }
  })
}

function getCurrentTimePagination () {
  return Math.ceil(currentPage / LIMIT)
}

function nextTime () {
  const min = (Math.ceil(currentPage / LIMIT) * LIMIT) + 1
  const max = min + LIMIT - 1
  console.log(min, max)
  currentPage = min
  showHidePages({ min, max })
  showHideButtons()
}

function prevTime () {
  const max = Math.floor(currentPage / LIMIT) * LIMIT
  const min = max - LIMIT + 1
  console.log(min, max)
  currentPage = min
  showHidePages({ min, max })
  showHideButtons()
}
