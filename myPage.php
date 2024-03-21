<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/myPage.style.css"/>
    <script type="module" src="../js/index.js" defer></script>
    <script src="./js/toggleMenu.js" defer></script>
    <title>Document</title>
</head>
<body>
  <header>
    <?php include './components/header.php' ?>
  </header>
  <div class="wrap">
    <div class="profile">
      <div>
        <div class="profile-image">
          <img class=user-image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAC9nkUrOYr_nZKahjeZAMtS03mfddn6iXxw&usqp=CAU"/>
          <img class="edit-icon" src="./assets/icons/edit.png"/>
        </div>
        <div class="user-name">이름</div>
        <div class="user-email">email222@gmail.com</div>
      </div>
    <section class="my-profile">
        <div class="tag">내 프로필</div>
        <div class="profile-info">
          <div class="info-box">
            <div class="icon-box">
              <img src="./assets/icons/user.png"/>
              <div class="info">닉네임</div>
            </div>
            <button class="change-info">닉네임 변경</button>
          </div>
          <div class="info-box">
            <div class="icon-box">
              <img src="./assets/icons/pw.png">
              <div class="info">비밀번호</div>
            </div>
            <button class="change-info">비밀번호 변경</button>
          </div>
          <div class="info-box">
            <div class="icon-box">
              <img src="./assets/icons/email.png">
              <div class="info">이메일</div>
            </div>
            <button class="change-info">이메일 변경</button>
          </div>
        </div>
    </section>
    </div>
    <section class="like-list">
      <div class="tag">관심 목록</div>
      <div class="thumbnail-container">
        <div class="thumbnail-box">
          <div class="thumbnail">
            <img  src="https://cdn.pixabay.com/photo/2024/02/25/13/30/car-8595770_1280.jpg"/>
            <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
          </div>
          <div class="thumbnail">
            <img  src="https://cdn.pixabay.com/photo/2024/02/25/13/30/car-8595770_1280.jpg"/>
            <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
          </div>
          <div class="thumbnail">
            <img  src="https://cdn.pixabay.com/photo/2024/02/25/13/30/car-8595770_1280.jpg"/>
            <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
          </div>
          <div class="thumbnail">
            <img  src="https://cdn.pixabay.com/photo/2024/02/25/13/30/car-8595770_1280.jpg"/>
            <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
          </div>
          <div class="thumbnail">
            <img  src="https://cdn.pixabay.com/photo/2024/02/25/13/30/car-8595770_1280.jpg"/>
            <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
          </div>
          <div class="thumbnail">
            <img  src="https://cdn.pixabay.com/photo/2024/02/25/13/30/car-8595770_1280.jpg"/>
            <div class="show-name">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo recusandae repellendus natus dicta quisquam quo dolor dignissimos esse mollitia rem reprehenderit facere iusto, expedita voluptatibus placeat repellat veritatis beatae officia?</div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer>
    <?php include './components/footer.php' ?>
  </footer>
</body>
</html>