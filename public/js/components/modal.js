import { $, toggleCSSclasses } from '../utils/index.js'

const modal = $({ selector: '.modal' })
const btnsOpenModal = $({ selector: '.modal__btn-open', multiple: true })
const btnCloseModal = $({ selector: '.modal__btn-close' })
const overlayModal = $({ selector: '.modal__overlay' })

btnsOpenModal.forEach(btn => btn.addEventListener('click', () => toggleModal()))
btnCloseModal.addEventListener('click', () => toggleModal())

function toggleModal () {
  const classesToggle = ['hidden', 'block']
  toggleCSSclasses(modal, classesToggle)
  toggleCSSclasses(overlayModal, classesToggle)
}
