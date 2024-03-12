import { apiController } from "../api/apiController.js";

// 공연목록API용 출력 함수
const paintData = (data, elementTag) => {
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