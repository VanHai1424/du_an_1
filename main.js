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

function validateForm () {
    var form = document.querySelector('.ticket-form');

    form.addEventListener('submit', function (event) {
        console.log(event);
        var slotTgChecked = document.querySelector('.form-ticket__slot-tg input[type="radio"]:checked:not([disabled])');
        var slotPtChecked = document.querySelector('.form-ticket__slot-pt input[type="radio"]:checked:not([disabled])');
        if (!slotTgChecked && !slotPtChecked) {
            alert('Vui lòng chọn ghế ngồi.');
            event.preventDefault(); 
        }
    });
}

validateForm();



function showSeat() {
    var veThuongGia = document.querySelector('.select_slot_thuonggia');
    var vePhoThong = document.querySelector('.select_slot_phothong');
    var listSlotTg = document.querySelectorAll('.form-ticket__slot-tg input[type="radio"]');
    var listSlotPt = document.querySelectorAll('.form-ticket__slot-pt input[type="radio"]');
    
    listSlotPt.forEach(element => {
        if(!element.disabled) {
            element.setAttribute('trang_thai', 'disable');
            element.disabled = true;
        }
    });

    veThuongGia.addEventListener('click', function () {
        listSlotTg.forEach(element => {
            if(element.hasAttribute('trang_thai')) {
                element.disabled = false;
            }
        });
        listSlotPt.forEach(element => {
            if(!element.disabled) {
                element.setAttribute('trang_thai', 'disable');
                element.disabled = true;
            }
        });
        
    });

    vePhoThong.addEventListener('click', function () {
        listSlotPt.forEach(element => {
            if(element.hasAttribute('trang_thai')) {
                element.disabled = false;
            }
        });
        listSlotTg.forEach(element => {
            if(!element.disabled) {
                element.setAttribute('trang_thai', 'disable');
                element.disabled = true;
            }
        });
    });
}

showSeat();


