<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/signUp.style.css"/>
    <title>Document</title>
</head>
<body>
  <div class="wrap">
    <header>
      <div>공연나라</div>
    </header>
    <section class="sign-up">
      <h1>회원가입</h1>
      <form class="sign-up-form">
        <div class="sign-up-input">
          <div class="id-box">
            <div class="icon"><i class="fa-regular fa-user"></i></div>
            <input class="id" type="text" placeholder="아이디"/>
            <button class="check-button">중복확인</button>
          </div>
          <div class="password-box">
            <div class="icon"><i class="fa-solid fa-lock"></i></div>
            <input class="password" type="password" placeholder="비밀번호"/>
          </div>
          <div class="password-box2">
            <div class="icon"><i class="fa-solid fa-lock"></i></div>
            <input class="password2" type="password" placeholder="비밀번호 확인"/>
          </div>
          <div class="email-box">
            <div class="icon"><i class="fas fa-solid fa-envelope"></i></div>
            <input class="email" type="email" placeholder="이메일"/>
          </div>
          <div class="name-box">
            <div class="icon"><i class="fa-regular fa-user"></i></div>
            <input class="name" type="text" placeholder="닉네임"/>
          </div>
        </div>
        <!-- 에러 메세지 -->
        <div class="userid-error">·아이디는 필수 정보입니다.</div>
        <div class="userpw-error">·비밀번호는 필수 정보입니다.</div>
        <div class="unmatch-pw">·비밀번호가 일치하지 않습니다.</div>
        <div class="usermail-error">·이메일은 필수 정보입니다.</div>
        <div class="usernick-error">·닉네임은 필수 정보입니다.</div>
        <div class="button-box">
          <button class="button">회원가입</button>
        </div>
      </form>
    </section>
  </div>
  <script src="./js/signUp.js"></script>
  <script src="./js/signUpRemove.js"></script>
</body>
</html>