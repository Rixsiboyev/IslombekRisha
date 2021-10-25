$(function () {
    $(".hide_block").slideUp(1000);
    $(".button").click(function () {
        $(".hide_block").slideDown(650);
        setTimeout(() => {
            $(".hide_block").slideUp(1000);
        }, 4000);
    })
    $(".hide_block").dblclick(function () {
        $(".hide_block").slideUp(1000);
    })


})

// function toggleButton() {
//     var username = document.getElementById('name').value;
//     var password = document.getElementById('number').value;
//     var password = document.getElementById('vapros').value;
//     var password = document.getElementById('kto').value;

//     if (username && password) {
//         document.getElementById('button').disabled = false;
//     } else {
//         document.getElementById('button').disabled = true;
// //     }
// }