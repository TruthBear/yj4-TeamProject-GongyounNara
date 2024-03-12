import { apiController } from "../api/apiController.js";

// 리스트페이지API 출력 함수
const paintData = (data, elementTag) => {
  const areaShow = document.getElementsByClassName(elementTag)[0]; 
  areaShow.innerHTML = "";

  if(Array.isArray(data.db) === true){
    data.db.forEach(item => {
      const aShow = document.createElement('div');
      aShow.classList.add('a-show');
  
      const aImg = document.createElement('div');
      aImg.classList.add('a-img');
  
      const img = document.createElement('img');
      img.setAttribute('src', item.poster );
      aImg.appendChild(img);
  
      const aDescription = document.createElement('div');
      aDescription.classList.add('a-description');
  
      const ul = document.createElement('ul');
  
      const title = document.createElement('li');
      const bold = document.createElement('bold');
      bold.innerText = item.prfnm;
      title.appendChild(bold);
      ul.appendChild(title);
  
      const date = document.createElement('li');
      data.innerText = `${item.prfpdfrom} ~ ${item.prfpdto}`;
      ul.appendChild(date);
  
      const genre = document.createElement('li');
      genre.innerText = item.genrenm;
      ul.appendChild(genre);
  
      aDescription.appendChild(ul);
  
      aShow.appendChild(aImg);
      aShow.appendChild(aDescription);
  
      areaShow.appendChild(aShow);
    });
  }else if(typeof data.db === 'object' && data.db !== null && !Array.isArray(data.db)) {
    // 데이터가 하나밖에 없을때

    const aShow = document.createElement('div');
    aShow.classList.add('a-show');

    const aImg = document.createElement('div');
    aImg.classList.add('a-img');

    const img = document.createElement('img');
    img.setAttribute('src', data.db.poster );
    aImg.appendChild(img);

    const aDescription = document.createElement('div');
    aDescription.classList.add('a-description');

    const ul = document.createElement('ul');

    const title = document.createElement('li');
    const bold = document.createElement('bold');
    bold.innerText = data.db.prfnm;
    title.appendChild(bold);
    ul.appendChild(title);

    const date = document.createElement('li');
    data.innerText = `${data.db.prfpdfrom} ~ ${data.db.prfpdto}`;
    ul.appendChild(date);

    const genre = document.createElement('li');
    genre.innerText = data.db.genrenm;
    ul.appendChild(genre);

    aDescription.appendChild(ul);

    aShow.appendChild(aImg);
    aShow.appendChild(aDescription);

    areaShow.appendChild(aShow);
  }else {
    // 불러온 데이터가 없는 경우
    areaShow.innerText = "공연이 없습니다."
  }
  
}


// api요청 함수
const showListApi = async (genre, kid) => {
  const url = "http://www.kopis.or.kr/openApi/restful/pblprfr?";
  const query = `&stdate=20240312&eddate=20240312&cpage=1&rows=10&signgucode=11&newsql=Y&shcate=${genre}&kidstate=${kid}`;
  
  const data = await apiController({ url, query })
  paintData(data, "area-show")
}

// 쿼리 업데이트 함수
const updateQuery = () => {
  const genre = document.querySelector('.genres input:checked').value;
  const kid = document.getElementById('kid').checked ? "Y" : " ";
  showListApi(genre, kid);
}

// 장르 업데이트 함수
const updateGenre = () => {
  const genre = document.querySelectorAll('.genres input');
  genre.forEach((item) => {
    item.addEventListener('change', updateQuery);
  })
}

// 어린이 체크 함수
const updateKid = () => {
  const kid = document.getElementById('kid');
  kid.addEventListener('click', updateQuery);
}

const init = () => {
  updateGenre();
  updateKid();
  updateQuery();
}

init();