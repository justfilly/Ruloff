import domReady from './core/domReady'
import { initForm } from './modules/form/formController'
// import { initSliders } from './modules/slider/sliderController'

domReady(() => {
    initForm()
    // initSliders()
})
