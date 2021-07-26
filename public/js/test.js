$(document).ready(function () {
    $(window).on("load", function () {
        $(".preloader18, .center").fadeOut(2000);
    })

    $('a ').click(function() {
        $(this).addClass('.active');
    })
    

    $('.test').click(function() {
        $(this).css('backgroundColor', 'limeGreen');
    });
});

const likeBtn = document.querySelector('.like-btn');
let count = document.querySelector('.clas');
let thum = document.querySelector('.thum');
let enable = false;
likeBtn.addEventListener('click', function(){
    if(!enable) {
        enable = true;
        thum.innerHTML = '<i class="fas fa-thumbs-up" style="color: rgb(36, 118, 211); font-size: 15px"></i>';
        count.textContent++;
    } else {
        enable = false;
        thum.innerHTML = '<i class="far fa-thumbs-up" style="color: rgb(49, 49, 49); font-size: 15px"></i>';
        count.textContent--;
    }
})