// 가려진 포스터 이미지 보이게 하기
const button = document.querySelector('.info-btn button');

button.addEventListener('click', function() {

    const infoImgs = document.querySelector('.info-imgs');
    
    infoImgs.classList.toggle('show');
    button.style.display = 'none'
});


// 가격보기 작동
let temp = false 
document.addEventListener("DOMContentLoaded", function() {
    var showPrice = document.querySelector('.show-price');
    var userNeeds = document.querySelector('.three');

    var observer = new IntersectionObserver(function(item) {
        item.forEach(function(item) {
            if (item.isIntersecting) {
                userNeeds.style.height = '0';
                userNeeds.style.opacity = '0';
                console.log(item);
            } else {
                userNeeds.style.height = '104px';
                userNeeds.style.opacity = '1';
                console.log(item);
            }
        });
    });
    observer.observe(showPrice);
});
