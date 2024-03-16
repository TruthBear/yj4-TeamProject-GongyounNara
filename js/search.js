import { apiController } from "../api/apiController.js";

// function prints() {
//     const printName = document.querySelector('.printName').value;
//     const quotedPrintName = `"${printName}"`; 
//     document.querySelector(".print-result").textContent = quotedPrintName;
// }  

const paintData = (data) => {
  const searchsShow = document.getElementsByClassName('searchs-show')[0];
  console.log(searchsShow);
  searchsShow.innerHTML = " ";

  if(Array.isArray(data.db) === true) {
    data.db.forEach(item => {
      const searchShow = document.createElement('div');
      searchShow.classList.add('search-show');
      
      const searchImg = document.createElement('div');
      searchImg.classList.add('search-img');

      const img = document.createElement('img');
      img.setAttribute('src', item.poster);
      searchImg.appendChild(img);
      
      const searchDescription = document.createElement('div');
      searchDescription.classList.add('search-description');

      const ul = document.createElement('ul');

      const title = document.createElement('li');
      const bold = document.createElement('strong');
      bold.innerText = item.prfnm;
      title.appendChild(bold);
      ul.appendChild(title);

      const date = document.createElement('li');
      date.innerText = `${item.prfpdfrom} ~ ${item.prfpdto}`;
      ul.appendChild(date);

      const genre = document.createElement('li');
      genre.innerText = item.genrenm;
      ul.appendChild(genre);

      const searchNow = document.createElement('div');
      searchNow.classList.add('search-now');

      const h2 = document.createElement('h2');
      h2.innerText = item.prfstate;
      searchNow.appendChild(h2);

      searchDescription.appendChild(ul);
      searchDescription.appendChild(searchNow);

      searchShow.appendChild(searchImg);
      searchShow.appendChild(searchDescription);

      searchsShow.appendChild(searchShow);

    })
  } else {
    searchsShow.innerHTML = "자료 없어 돌아가"
  }
}


const showData = async (searchWord) => {
  const data = await apiController({
    url: "http://www.kopis.or.kr/openApi/restful/pblprfr?",
    query: `&stdate=20240101&eddate=20241231&cpage=1&rows=5&prfstate=02&signgucode=11&shprfnm=${searchWord}&newsql=Y`
  });
  paintData(data);
}

// 무분별한 api 요청을 막기위한 디바운스 함수
const debounce = (func, delay) => {
  let timeoutId;
  return () => {
    if (timeoutId) {
      clearTimeout(timeoutId);
    }
    timeoutId = setTimeout(() => {
      func();
    }, delay);
  };
};

const input = document.getElementsByTagName('input')[0];
input.addEventListener('keyup', debounce(() => {
  const searchWord = input.value;
  showData(searchWord);
}, 1000));  // 1초뒤 api 요청


document.querySelectorAll('.search-area input').forEach(function(input) {
    var btn = input.parentNode.querySelector('.btnClear');
    btn.style.display = 'none';

    input.addEventListener('input', function() {
        btn.style.display = input.value.trim() !== "" ? 'block' : 'none';
    });

    btn.addEventListener('click', function(e) {
        input.value = "";
        btn.style.display = 'none';
        document.querySelector(".print-result").textContent = ""; // 입력한 값 비우기
        e.preventDefault();

    });
});
