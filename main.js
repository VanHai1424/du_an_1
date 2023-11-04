var arr = [
    'ban1.png',
    'ban2.webp',
    'ban3.jpg'
]

var i = 0;
var banner = document.getElementById('id-banner');
function next() {
    i++;
    if(i==3) i = 0;
    banner.src="./img/" + arr[i];
}

function prev() {
    i--;
    if(i==-1) i = 2;
    banner.src="./img/" + arr[i];
}

var t;
function run(){
    t = window.setInterval(next, 1000);
}

// Index2
// var container2Element = document.querySelector('.container2');
// var btn = container2Element.querySelector('button');
// function check(){
//     var inputElements = container2Element.querySelectorAll('input[type="text"]');
//     var ok = 1;
//     for(let i = 0 ; i< inputElements.length ; i++) {
//         if(inputElements[i].value == '') {
//             inputElements[i].parentElement.querySelector('.content2-text').innerHTML = 'Không được bỏ trống !';
//             inputElements[i].parentElement.querySelector('.content2-text').style.color = 'red';
//             ok = 0;
//         }
//         inputElements[i].addEventListener('keyup', function(){
//             if(inputElements[i].value) inputElements[i].parentElement.querySelector('.content2-text').innerHTML = '';
//             else {
//                 inputElements[i].parentElement.querySelector('.content2-text').innerHTML = 'Không được bỏ trống !';
//                 inputElements[i].parentElement.querySelector('.content2-text').style.color = 'red';
//             }
//         })      
//     }
//     // var cnt = 0;
//     // for(var i = 0 ; i<inputElements[1].value.length; i++){
//     //     if(inputElements[1].value[i] == '@') {
//     //         cnt++;
//     //     }
        
//     // }
//     if(inputElements[1].value != '' && inputElements[1].value.split("@").length !== 2) {
//         inputElements[1].parentElement.querySelector('.content2-text').innerHTML = 'Nhập không hợp lệ!';
//         inputElements[1].parentElement.querySelector('.content2-text').style.color = 'red';
//         ok = 0;
//     }

    
//     if(inputElements[2].value != inputElements[3].value) {
//         inputElements[3].parentElement.querySelector('p').innerHTML = 'Mật khẩu không khớp!';
//         inputElements[3].parentElement.querySelector('p').style.color = 'red';
//         ok = 0;
        
//     }
//     else {
//         if(inputElements[2].value.length < 8 && inputElements[3].value.length < 8) {
//             inputElements[2].parentElement.querySelector('p').innerHTML = 'Mật khẩu phải trên 8 kí tự';
//             inputElements[2].parentElement.querySelector('p').style.color = 'red';
//             ok = 0;
//         }
//     }
    
//     if(ok==1) alert('Bạn đã đăng ký thành công !');
    
// }
// btn.addEventListener('click', check);
