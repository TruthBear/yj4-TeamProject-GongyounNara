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

  const BackImg = document.querySelector('.back-img');
  BackImg.setAttribute('src', data.db.poster);

  const PostImg = document.querySelector('.poast-img img');
  PostImg.setAttribute('src', data.db.poster)

  const PostArea = document.querySelector('.poast-area');
  PostArea.innerHTML= data.db.area;

  const AreaName = document.querySelector('.area-name');
  AreaName.innerHTML = data.db.fcltynm;

  const ShowSeason = document.querySelector('.seasson');
  ShowSeason.innerHTML = data.db.prfpdfrom + ' ~ ' + data.db.prfpdto;

  const ShowGenre = document.querySelector('.genre');
  ShowGenre.innerHTML = data.db.genrenm;

  const RunTime = document.querySelector('.runtime');
  RunTime.innerHTML =data.db.prfruntime;

  const Age = document.querySelector('.age');
  Age.innerHTML  = data.db.prfage;

  const Cast = document.querySelector('.cast');
  Cast.innerHTML = data.db.prfcast;

  const Pd = document.querySelector('.pd');
  Pd.innerHTML = data.db.prfcrew;

  const InfoImg = document.querySelector('.info-imgs img');
  InfoImg.setAttribute('src', data.db.styurls.styurl);
} 

// 시설 상세 정보 api
const placeDetailApi = async ( code ) => {
  const data = await apiController({
    url: `http://www.kopis.or.kr/openApi/restful/prfplc/${code}?`,
    query: "&newsql=Y",
  })
  console.log(data);

  const MapName = document.querySelector('.location-name');
  MapName.innerHTML = data.db.fcltynm;

  const Location = document.querySelector('.show-location');
  Location.innerHTML = data.db.adres;
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
