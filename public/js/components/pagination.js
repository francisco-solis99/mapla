import { $, toggleCSSclasses, addCSSclasses, removeCSSclasses } from '../utils/index.js'

// Just in case to use it
const url = new URL(window.location.href)

const pagination = $({ selector: '.pagination' })
const pages = $({ selector: '.pagination__page', multiple: true, element: pagination })
const NUM_PAGES = pages.length
const prevPageBtn = $({ selector: '.pagination__prev', element: pagination })
const nextPageBtn = $({ selector: '.pagination__next', element: pagination })

// it is important the queryParam in the url named as page
let currentPage = Number(url.searchParams.get('page')) ?? 1
const LIMIT = 5
const timesPagination = Math.ceil(NUM_PAGES / LIMIT)

function renderPaginationButtons () {
  // Appear the btn nextBtn if there are more page than the limit const
  if (NUM_PAGES > LIMIT && Math.ceil(currentPage / LIMIT) < timesPagination) nextPageBtn.classList.remove('hidden')

  // Appear the btn prevBtn if the current page is bigger than the LIMIT
  if (currentPage > LIMIT) {
    prevPageBtn.classList.remove('hidden')
  }

  if (Math.ceil(currentPage / LIMIT) === 1) {
    prevPageBtn.classList.add('hidden')
  }

  // Dissapear the nextBtn if the current times is equal to the times pagination (because is the last ampunt of pages)
  if (Math.ceil(currentPage / LIMIT) === timesPagination) {
    nextPageBtn.classList.add('hidden')
  }
}

renderPaginationButtons()
const initialMin = Math.floor(currentPage / LIMIT) * LIMIT + 1
const initialMax = initialMin + LIMIT - 1
console.log(initialMin, initialMax)
showHidePages({ min: initialMin, max: initialMax })

function showHidePages ({ min, max }) {
  pages.forEach((page, index) => {
    if (index + 1 < min || index + 1 > max) {
      if (page.classList.contains('hidden')) return
      toggleCSSclasses(page, ['hidden'])
    } else {
      if (page.classList.contains('hidden')) toggleCSSclasses(page, ['hidden'])
    }

    const pageLinkClasses = ['bg-mapla-dark-200', 'text-white']
    if (currentPage === index + 1) {
      removeCSSclasses(page.firstElementChild, ['text-gray-500'])
      addCSSclasses(page.firstElementChild, pageLinkClasses)
    } else {
      removeCSSclasses(page.firstElementChild, pageLinkClasses)
      addCSSclasses(page.firstElementChild, ['text-gray-500'])
    }
  })
}

function nextTime () {
  const min = (Math.ceil(currentPage / LIMIT) * LIMIT) + 1
  const max = min + LIMIT - 1
  console.log(min, max)
  currentPage = min
  showHidePages({ min, max })
  renderPaginationButtons()
}

function prevTime () {
  const max = Math.floor(currentPage / LIMIT) * LIMIT
  const min = max - LIMIT + 1
  console.log(min, max)
  currentPage = min
  showHidePages({ min, max })
  renderPaginationButtons()
}

nextPageBtn.addEventListener('click', nextTime)
prevPageBtn.addEventListener('click', prevTime)
