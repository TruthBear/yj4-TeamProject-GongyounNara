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

  const setData = (selector, value) => {
    const element = document.querySelector(selector);
    if (element && value !== undefined && value !== null && value !== "") {
      if (typeof value === 'object') {
        element.innerText = "해당 정보가 없습니다.";
      } else {
        if (selector.includes('img')) {
          element.setAttribute('src', value);
        } else {
          element.innerText = value;
  }};
    } else {
      element.innerText = "해당 정보가 없습니다.";
    }};

  setData('.back-img', data.db.poster);
  setData('.poast-img img', data.db.poster);
  setData('.poast-area', data.db.area);
  setData('.area-name', data.db.fcltynm);
  setData('.seasson', `${data.db.prfpdfrom} ~ ${data.db.prfpdto}`);
  setData('.genre', data.db.genrenm);
  setData('.runtime', data.db.prfruntime);
  setData('.age', data.db.prfage);
  setData('.cast', data.db.prfcast);
  setData('.pd', data.db.prfcrew);

  const Schedule = document.querySelector('.schedule');
  if (Schedule && data.db.dtguidance && data.db.dtguidance !== "") {
    Schedule.innerHTML = ''; // Clear existing schedule
    const dtguidance = data.db.dtguidance.split(',');
    dtguidance.forEach(item => {
      const paragraph = document.createElement('p');
      paragraph.textContent = item.trim(); 
      Schedule.appendChild(paragraph); 
    });
  } else {
    Schedule.innerText = "해당 정보가 없습니다.";
  };

  const InfoImg = document.querySelector('.info-imgs img');
  if (InfoImg && data.db.styurls && data.db.styurls.styurl) {
    InfoImg.setAttribute('src', data.db.styurls.styurl);
  } else {
    InfoImg.setAttribute('src', "해당 정보가 없습니다.");
  }};


// 시설 상세 정보 api
const placeDetailApi = async (code) => {
  const data = await apiController({
    url: `http://www.kopis.or.kr/openApi/restful/prfplc/${code}?`,
    query: "&newsql=Y",
  });
  console.log(data);

  const MapName = document.querySelector('.location-name');
  MapName.innerText = data.db.fcltynm;

  const Location = document.querySelector('.show-location');
  Location.innerText = data.db.adres;

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



// Intersection Observer를 사용하여 특정 ID에 대한 링크가 화면에 나타날 때 CSS 효과를 적용
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const targetId = entry.target.getAttribute('id');
        console.log(targetId);
        const correspondingLink = document.querySelector(`.wrap-${targetId}`);
        if (entry.isIntersecting) {
            correspondingLink.classList.add('showing');
        } else {
            correspondingLink.classList.remove('showing');
        }
    });
});
// 관찰할 ID 목록
const targetIds = ['#show-detail', '#show-area'];
// 각 ID에 대한 Intersection Observer 관찰
targetIds.forEach(id => {
    const target = document.querySelector(id);
    if (target) {
        observer.observe(target);
    }
});
