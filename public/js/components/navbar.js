import { toggleCSSclasses, $, addCSSclasses } from '../utils/index.js'

// Navbar toggle
const navbar = $({ selector: '.navbar' })
const btnNavbarOpen = $({ selector: '#btn-menu-open' })
const btnNavbarClose = $({ selector: '#btn-menu-close' })

function toggleNavBar () {
  const classesToToggle = ['-right-full', 'right-0']
  toggleCSSclasses(navbar, classesToToggle)
}

btnNavbarOpen.addEventListener('click', toggleNavBar)
btnNavbarClose.addEventListener('click', toggleNavBar)

// Submenus/dropdown

function toggleDropDown (dropDown) {
  const classesToToggle = ['opacity-0', 'max-h-0', 'scale-0']
  toggleCSSclasses(dropDown, classesToToggle)
}

function hideDropdown (dropDown) {
  const classesToAdd = ['opacity-0', 'max-h-0', 'scale-0']
  addCSSclasses(dropDown, classesToAdd)
}

const btnsDropdown = $({ selector: '[data-dropdown-button]', multiple: true })

navbar.addEventListener('click', (e) => {
  const { target } = e
  const isDropDownBtn = target.matches('[data-dropdown-button]')
  if (!isDropDownBtn) return

  let currentBtnDropDown = null
  currentBtnDropDown = target.closest('[data-dropdown-button]')
  toggleDropDown(currentBtnDropDown.nextElementSibling)

  btnsDropdown.forEach(btn => {
    if (btn === currentBtnDropDown) return
    hideDropdown(btn.nextElementSibling)
  })
})
