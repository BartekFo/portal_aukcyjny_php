const wrapper = document.querySelector('#createAuction_dateWrapper')
const dateInput = document.querySelector('#deadline')

function formatISOLocal(d) {
    let z = n => ('0' + n).slice(-2)
    return d.getFullYear()+'-'+z(d.getMonth()+1) + '-' +z(d.getDate())
}

function formatISOLocalNextMonth(d) {
    let z = n => ('0' + n).slice(-2)
    return d.getFullYear()+'-'+z(d.getMonth()+2) + '-' +z(d.getDate())
}

window.onload = function () {
    let d = new Date()
    dateInput.min = formatISOLocal(d)
    let nextMonth
    dateInput.defaultValue = dateInput.min
    dateInput.max = formatISOLocalNextMonth(d);
    console.log(dateInput.outerHTML)
}
