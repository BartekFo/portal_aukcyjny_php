const btn = document.getElementById('myAcc_wrapper_dataContainer_btn')
const cancelBtn = document.getElementById('myAcc_wrapper_dataContainer_btnCancel')
const dataInfo = document.getElementById('showDataContainer')
const changeData = document.getElementById('changeDataContainer')

btn.addEventListener('click', () => {
  dataInfo.classList.add('invisible')
  changeData.classList.remove('invisible')
})

cancelBtn.addEventListener('click', () => {
  const answear = confirm('Opuszczenie strony będzie wiązało się z utratą niezapisanych danych')
  if (answear === true) {
    dataInfo.classList.remove('invisible')
    changeData.classList.add('invisible')
  }
})
