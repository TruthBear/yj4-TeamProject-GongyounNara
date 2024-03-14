<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/signIn.style.css"/>
  <title>Document</title>
</head>
<body>
  <div class="wrap">
    <section class="sign-in">
      <div class="icon">
        <i class="fa-solid fa-arrow-left"></i>
      </div>
      <div class="login">
        <h1>공연나라</h1>
        <form class="sign-in-form">
        <div class="id-box">
          <i class="fa-regular fa-user"></i>
          <input class="id" type="text" placeholder="아이디"/>
        </div>
        <div class="password-box">
          <i class="fa-solid fa-lock"></i>
          <input class="password" type="password" placeholder="비밀번호"/>
        </div>
        <button class="button">로그인</button>
        <div class="find-button">
          <div>아이디 찾기</div>
          <div>비밀번호 찾기</div>
          <div>회원가입</div>
        </div>
        </form>
        <!-- 에러  -->
        <div class="id-error">·아이디를 입력해 주세요.</div>
        <div class="pw-error">·비밀번호를 입력해 주세요.</div>
      </div>
      <div class="hr-sect">소셜 로그인</div>
      <!-- 태블릿 -->
      <div class="social">
        <div class="google">
          <img src="./assets/icons/google.jpg"/>
          <div>Google 계정으로 가입하기</div>
        </div>
        <div class="naver">
          <img src="./assets/icons/naver.png"/>
          <div>네이버 계정으로 가입하기</div>
        </div>
        <div class="kakao">
          <img src="./assets/icons/kakao.png"/>
          <div>카카오 계정으로 가입하기</div>
        </div>
      </div>
      <!-- 모바일 -->
      <div class="mobile-social">
        <div class="m-google">
          <img src="./assets/icons/Google_icon.png"/>
        </div>
        <div class="m-naver">
          <img src="./assets/icons/naver2.png"/>
        </div>
        <div class="m-kakao">
          <img src="./assets/icons/kakao.png"/>
        </div>
      </div>
    </section>
  </div>
  <script src="./js/signIn.js"></script>
</body>
</html>