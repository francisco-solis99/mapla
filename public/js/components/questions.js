import { toggleCSSclasses, $ } from '../utils/index.js'

const questions = $({ selector: '.question', multiple: true })

questions.forEach(question => {
  const content = $({ selector: '.question__content', element: question })
  const questionIcon = $({ selector: '.question__icon-open', element: question })
  question.addEventListener('click', () => {
    const classesContent = ['scale-0', 'scale-100', 'max-h-0', 'max-h-[500px]']
    const classesQuestionIcon = ['hidden', 'inline-block']

    toggleCSSclasses(content, classesContent)
    toggleCSSclasses(questionIcon, classesQuestionIcon)
  })
})
