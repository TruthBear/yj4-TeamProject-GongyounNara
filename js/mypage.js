import { sqlController } from "../sql/sqlController.js";

const isLogin = async () => {
  return fetch('../api/isLogin.php')
         .then(res => res.json())
         .then(data => data);
}

const paintLikedList = (data) => {
  const thumbnailBox = document.getElementsByClassName('thumbnail-box')[0];
  thumbnailBox.innerHTML = "";
  data.forEach(item => {
    const card = document.createElement('div');
    card.classList.add('card');

    const thumbnail = document.createElement('div');
    thumbnail.classList.add('thumbnail');

    const img = document.createElement('img');
    img.setAttribute('src', item.performance_poster_url);
    img.setAttribute('alt', `${item.performance_title} Poster`)
    thumbnail.appendChild(img);

    const showName = document.createElement('div');
    showName.classList.add('show-name');
    showName.innerText = item.performance_title;

    card.appendChild(thumbnail);
    card.appendChild(showName);

    thumbnailBox.appendChild(card);
  });
}

const manageResourcesApi = async ( typeData, userId ) => {
  const data = await sqlController({
    type: typeData,
    sql: {
      user_id: userId
    }
  })
  paintLikedList(data);
}



const userId = await isLogin();

if(userId !== "") {
  manageResourcesApi('view', userId);
}

