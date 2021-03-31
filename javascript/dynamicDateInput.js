const wrapper = document.querySelector('#createAuction_dateWrapper')
const dateInput = document.querySelector('#deadline')

function formatISOLocal(d) {
    let z = n => ('0' + n).slice(-2)
    return d.getFullYear()+'-'+z(d.getMonth()+1) + '-' +z(d.getDate())
}

window.onload = function () {
    let d = new Date()
    dateInput.min = formatISOLocal(d)
    let nextMonth
    dateInput.defaultValue = dateInput.min
    const currentDayOfMonth = d.getDate()-2
    const currentMonth = d.getMonth()+2
    if (currentMonth < 10) {
       nextMonth = "0" + currentMonth;
    }
    const currentYear = d.getFullYear()
    dateInput.max = currentYear + "-" + nextMonth + "-" + currentDayOfMonth
    console.log(dateInput.outerHTML)
}
