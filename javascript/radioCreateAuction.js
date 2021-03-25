const radio1 = document.querySelector('#stateOfUseRadio1')
const radio2 = document.querySelector('#stateOfUseRadio2')
const radio3 = document.querySelector('#stateOfUseRadio3')
const checkbox1 = document.querySelector('#delivery-1')
const checkbox2 = document.querySelector('#delivery-2')
const checkbox3 = document.querySelector('#delivery-3')
const checkbox4 = document.querySelector('#delivery-4')
const checkboxIconArr = document.querySelectorAll('.checkboxIcon')
const labelArr = document.querySelectorAll('.createAuction_formWrapper_inputWrapper_radioLabel')

radio1.addEventListener('click', () => {
  if (radio1.checked) {
    labelArr[0].classList.add('selectedRadio')
    labelArr[1].classList.remove('selectedRadio')
    labelArr[2].classList.remove('selectedRadio')
  }
})
radio2.addEventListener('click', () => {
  if (radio2.checked) {
    labelArr[0].classList.remove('selectedRadio')
    labelArr[1].classList.add('selectedRadio')
    labelArr[2].classList.remove('selectedRadio')
  }
})
radio3.addEventListener('click', () => {
  if (radio3.checked) {
    labelArr[2].classList.add('selectedRadio')
    labelArr[0].classList.remove('selectedRadio')
    labelArr[1].classList.remove('selectedRadio')
  }
})

checkbox1.addEventListener('click', () => {
  if (checkbox1.checked) {
    checkboxIconArr[0].classList.add('visibleChecboxItem')
  } else {
    checkboxIconArr[0].classList.remove('visibleChecboxItem')
  }
})
checkbox2.addEventListener('click', () => {
  if (checkbox2.checked) {
    checkboxIconArr[1].classList.add('visibleChecboxItem')
  } else {
    checkboxIconArr[1].classList.remove('visibleChecboxItem')
  }
})
checkbox3.addEventListener('click', () => {
  if (checkbox3.checked) {
    checkboxIconArr[2].classList.add('visibleChecboxItem')
  } else {
    checkboxIconArr[2].classList.remove('visibleChecboxItem')
  }
})
checkbox4.addEventListener('click', () => {
  if (checkbox4.checked) {
    checkboxIconArr[3].classList.add('visibleChecboxItem')
  } else {
    checkboxIconArr[3].classList.remove('visibleChecboxItem')
  }
})
