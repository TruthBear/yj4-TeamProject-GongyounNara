import { apiController } from "../api/apiController.js";

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const code = urlParams.get('code');

// 공연 상세 정보 api
const showDetailApi = async ( code ) => {
  const data = await apiController({
    url: `http://www.kopis.or.kr/openApi/restful/pblprfr/${code}?`,
    query: "&newsql=Y",
  }) 

  console.log(data);
  placeDetailApi(data.db.mt10id);
} 

// 시설 상세 정보 api
const placeDetailApi = async ( code ) => {
  const data = await apiController({
    url: `http://www.kopis.or.kr/openApi/restful/prfplc/${code}?`,
    query: "&newsql=Y",
  })
  console.log(data);
}

showDetailApi(code);




// 가려진 포스터 이미지 보이게 하기
const button = document.querySelector('.info-btn button');

button.addEventListener('click', function() {

    const infoImgs = document.querySelector('.info-imgs');
    
    infoImgs.classList.toggle('show');
    button.style.display = 'none'
});


// 가격보기 작동
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
