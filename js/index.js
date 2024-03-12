import { apiController } from "../api/apiController.js";

document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('toggleButton');
    const closeButton = document.getElementById('closeButton');
    const menuContainer = document.querySelector('.tog-menu');
    const body = document.body;

    let scrollDisabled = false;

    function toggleMenu() {
        menuContainer.style.display = menuContainer.style.display === 'none' ? 'flex' : 'none';
        
        // body에 menu-opened 클래스를 toggle하여 스타일을 변경
        body.classList.toggle('menu-opened', menuContainer.style.display !== 'none');

        // 스크롤을 막거나 허용합니다.
        document.documentElement.style.overflow = scrollDisabled ? 'hidden' : 'auto';
        scrollDisabled = !scrollDisabled;
    }

    toggleButton.addEventListener('click', toggleMenu);

    closeButton.addEventListener('click', function () {
        menuContainer.style.display = 'none';
        body.classList.remove('menu-opened');
        scrollDisabled = true;
        document.documentElement.style.overflow = 'auto';
    });

    // 페이지가 로드된 후에 한 번만 클릭하여 초기화
    toggleButton.click();

    // 새로고침 시 초기 스크롤 상태를 설정
    window.addEventListener('beforeunload', function () {
        scrollDisabled = true;
    });
});


// const boxOfficeApi = async () => {
//   try {
//     return fetch("http://localhost/api/boxOfficeApi.php/")
//     .then(response => response.json())
//     .then(data => {
      
//     })
//   }catch(err) {
//     console.log(`Error: ${err}`);
//   }
// }


// 공연목록API용 출력 함수
function paintData(data, elementTag) {
  const section = document.querySelector(elementTag);
  section.innerHTML = "";
  data.db.forEach(item => {
    const popShow = document.createElement('div');
    popShow.classList.add('pop-show');

    const showImg = document.createElement('div');
    showImg.classList.add('show-img');

    const img = document.createElement('img');
    img.setAttribute('src', `${item.poster}`);
    showImg.appendChild(img);

    const popDescription = document.createElement('div');
    popDescription.classList.add('pop-description');
    const ul = document.createElement('ul');

    const name = document.createElement('li');
    const bold = document.createElement('strong');
    bold.innerText = item.prfnm;
    name.appendChild(bold);
    ul.appendChild(name);

    const date = document.createElement('li');
    date.innerText = `${item.prfpdfrom} ~ ${item.prfpdto}`;
    ul.appendChild(date);

    const genre = document.createElement('li');
    genre.innerText = item.genrenm;
    ul.appendChild(genre);

    popDescription.appendChild(ul);


    popShow.appendChild(showImg);
    popShow.appendChild(popDescription);

    section.appendChild(popShow);
  });
}


// 현재 예매순위(일주인동안))
const boxOfficeApi = async () => {
  const data = await apiController({
    url: "http://kopis.or.kr/openApi/restful/boxoffice?",
    query: "&ststype=week&date=20240304&area=11"
  })

  const section = document.querySelector('.one .pop');
  section.innerHTML = "";
  for(let i=0;i<5;i++){
    const popShow = document.createElement('div');
    popShow.classList.add('pop-show');

    const showImg = document.createElement('div');
    showImg.classList.add('show-img');
    
    const img = document.createElement('img');
    img.setAttribute('src', `http://www.kopis.or.kr/${data.boxof[i].poster}`);
    showImg.appendChild(img);

    const popDescription = document.createElement('div');
    popDescription.classList.add('pop-description')
    const ul = document.createElement('ul');
    
    const name = document.createElement('li');
    const bold = document.createElement('strong');
    bold.innerText = data.boxof[i].prfnm;
    name.appendChild(bold);
    ul.appendChild(name);

    const date = document.createElement('li');
    date.innerText = data.boxof[i].prfpd;
    ul.appendChild(date);

    const genre = document.createElement('li');
    genre.innerText = data.boxof[i].cate;
    ul.appendChild(genre);

    popDescription.appendChild(ul);


    popShow.appendChild(showImg);
    popShow.appendChild(popDescription);

    section.appendChild(popShow);
  }
  
}

// 현재 진행중인 공연
const nowShwoingApi = async () => {
  const data = await apiController({
    url: "http://www.kopis.or.kr/openApi/restful/pblprfr?",
    query: "&stdate=20240301&eddate=20240312&cpage=1&rows=5&prfstate=02&newsql=Y",
  })

  paintData(data, '.two .pop');
}

// 현재 진행중인 어린이 공연
const kidsShowApi = async () => {
  const data = await apiController({
    url: "http://www.kopis.or.kr/openApi/restful/pblprfr?",
    query: "&stdate=20240301&eddate=20240312&cpage=1&rows=5&prfstate=02&kidstate=Y&newsql=Y",
  });
  
  paintData(data, '.three .pop');
  
}



boxOfficeApi();
nowShwoingApi();
kidsShowApi();