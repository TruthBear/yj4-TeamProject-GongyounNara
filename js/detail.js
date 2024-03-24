import { apiController } from "../api/apiController.js";

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const code = urlParams.get('code');

// 공연 상세 정보 api
const showDetailApi = async (code) => {
  const data = await apiController({
    url: `http://www.kopis.or.kr/openApi/restful/pblprfr/${code}?`,
    query: "&newsql=Y",
  });

  console.log(data);
  placeDetailApi(data.db.mt10id, data.db.lo, data.db.la);

  const BackImg = document.querySelector('.back-img');
  BackImg.setAttribute('src', data.db.poster);

  const PostImg = document.querySelector('.poast-img img');
  PostImg.setAttribute('src', data.db.poster)

  const PostArea = document.querySelector('.poast-area');
  PostArea.innerHTML = data.db.area;

  const AreaName = document.querySelector('.area-name');
  AreaName.innerHTML = data.db.fcltynm;

  const ShowSeason = document.querySelector('.seasson');
  ShowSeason.innerHTML = data.db.prfpdfrom + ' ~ ' + data.db.prfpdto;

  const ShowGenre = document.querySelector('.genre');
  ShowGenre.innerHTML = data.db.genrenm;

  const RunTime = document.querySelector('.runtime');
  RunTime.innerHTML = data.db.prfruntime;

  const Age = document.querySelector('.age');
  Age.innerHTML = data.db.prfage;

  const Cast = document.querySelector('.cast');
  Cast.innerHTML = data.db.prfcast;

  const Pd = document.querySelector('.pd');
  Pd.innerHTML = data.db.prfcrew;

  const InfoImg = document.querySelector('.info-imgs img');
  InfoImg.setAttribute('src', data.db.styurls.styurl);
}

// 시설 상세 정보 api
const placeDetailApi = async (code) => {
  const data = await apiController({
    url: `http://www.kopis.or.kr/openApi/restful/prfplc/${code}?`,
    query: "&newsql=Y",
  });
  console.log(data);

  const MapName = document.querySelector('.location-name');
  MapName.innerHTML = data.db.fcltynm;

  const Location = document.querySelector('.show-location');
  Location.innerHTML = data.db.adres;

  const longitude = data.db.lo; // 경도
  const latitude = data.db.la;   // 위도

  // Kakao 지도 API 로드 후 지도 생성
  const script = document.createElement('script');
  script.src = 'https://dapi.kakao.com/v2/maps/sdk.js?appkey=a75f6db1726414effe55a0976b9eb28b';
  script.async = true;
  document.head.appendChild(script);

  script.onload = () => {
    const container = document.getElementById('map');
    const options = {
      center: new kakao.maps.LatLng(latitude, longitude),
      level: 3
    };
    
    const map = new kakao.maps.Map(container, options);

    // 마커를 생성하고 지도에 표시합니다.
    const markerPosition = new kakao.maps.LatLng(latitude, longitude);
    const marker = new kakao.maps.Marker({
        position: markerPosition
    });
    marker.setMap(map);
    };
};

showDetailApi(code);


// 가려진 포스터 이미지 보이게 하기
const button = document.querySelector('.info-btn button');

button.addEventListener('click', function () {

  const infoImgs = document.querySelector('.info-imgs');

  infoImgs.classList.toggle('show');
  button.style.display = 'none'
});


// 가격보기 작동
document.addEventListener("DOMContentLoaded", function () {
  var showPrice = document.querySelector('.show-price');
  var userNeeds = document.querySelector('.three');

  var observer = new IntersectionObserver(function (item) {
    item.forEach(function (item) {
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
