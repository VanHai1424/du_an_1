var arr = [
    'ban1.png',
    'ban2.webp',
    'ban3.jpg'
]

var i = 0;
var banner = document.getElementById('id-banner');
function next() {
    i++;
    if (i == 3) i = 0;
    banner.src = "./img/" + arr[i];
}

function prev() {
    i--;
    if (i == -1) i = 2;
    banner.src = "./img/" + arr[i];
}

var t;
function run() {
    t = window.setInterval(next, 1000);
}

function toggleForm(showId, hideId) {
    var showForm = document.getElementById(showId);
    var hideForm = document.getElementById(hideId);

    showForm.style.display = 'flex';
    hideForm.style.display = 'none';
}
