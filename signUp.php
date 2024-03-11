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
        <div class="id-box">
          <i class="fa-regular fa-user"></i>
          <input class="id" type="text" placeholder="아이디"/>
          <div class="check-button">중복확인</div>
        </div>
        <div class="password-box">
          <i class="fa-solid fa-lock"></i>
          <input class="password" type="password" placeholder="비밀번호"/>
        </div>
        <div class="name-box">
          <i class="fa-regular fa-user"></i>
          <input class="name" type="text" placeholder="닉네임"/>
        </div>
        <div class="email-box">
          <i class="fas fa-solid fa-envelope"></i>
          <input class="email" type="email" placeholder="이메일"/>
        </div>
        <button class="button">회원가입</button>
      </form>
    </section>
  </div>
  
    
</body>
</html>