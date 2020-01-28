function startTime() {
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    document.getElementById("DigitalClock").innerHTML = h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 1000);
}

$(document).ready(function () {
    $('.has-treeview').click(function () {
        $(this).toggleClass('menu-open');
    })
})