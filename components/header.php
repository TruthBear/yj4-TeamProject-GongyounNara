<?php 

include "config/const.php";

if (empty($_SESSION["user_id"])) {
  session_start();
}

if (isset($_SESSION["user_id"])) {
  echo "<script>console.log('아이디 있음')</script>";
  $user_id = $_SESSION["user_id"];
} else {
  $user_id = "";
}

if (isset($_SESSION["user_name"])) {
  $user_name = $_SESSION["user_name"];
} else {
  $user_name = "";
}

if (isset($_SESSION["user_profile"])) {
  $user_profile = $_SESSION["user_profile"];
} else {
  $user_profile = "";
}

if (isset($_SESSION["user_role"])) {
  $user_role = $_SESSION["user_role"];
} else {
  $user_role = "";
}

?>

<div class="head">
  <!-- 로고 및 메뉴 -->
  <div class="main-logo">
      <div class="logo">
          <h1><a href="./index.php">공연나라</a></h1>
      </div>
      <!-- 메뉴 -->
      <div class="menu-container">
          <ul>
            <li><a href="./list.php">공연목록</a></li>
            <li><a href="">menu 2</a></li>
          </ul>
      </div> 
  </div>
  <!--  검색창 및 토글 -->
  <div class="main-area">
    <nav>      
        <!-- area -->
        <div id="area-box">
          <div id="area-button">
            <img src="assets/icons/Location Marker.svg" alt="Location Marker">
            <div id="location">서울</div>
          </div>
          <ul class="option-list">
            <li class="option option-hidden" >서울</li>
            <li class="option option-hidden" >인천</li>
            <li class="option option-hidden" >세종</li>
            <li class="option option-hidden" >대전</li>
            <li class="option option-hidden" >광주</li>
            <li class="option option-hidden" >울산</li>
            <li class="option option-hidden" >대구</li>
            <li class="option option-hidden" >부산</li>
          </ul>
        </div>
        <!-- profile -->
        <?php 
          if(!$user_id) {
        ?>
        <div class='user-info'>
          <div><a href="signIn.php">로그인</a></div>
          <div><a href="signUp.php">회원가입</a></div>
          <div class='user-img'>
              <div class='user-btn'>
                <img src="./assets/profiles/default.jpg" alt="">
              </div>
          </div>
        </div>
        <?php
          } else {
            $logged = $user_name."님";
            ?>
           <ul class="user-list">
                <li class="user user-hidden" >
                  <a href="#">
                    <div>이름</div>
                    <div>프로필 보기</div>
                  </a>
                </li>
                <li class="user user-hidden" ><a href="#">관리자 페이지</a></li>
                <li class="user user-hidden" ><a href="#">로그아웃</a></li>
            </ul>
        <?php
          }
          ?>
        <div class = 'search-img'>
          <a href="./search.php"><img src="./assets/icons/SEARCH.png" alt=""></a>
        </div>
</nav>
      <!-- 토글버튼 -->
      <div class="toggle">
          <div class="tog-btn">
              <button id="toggleButton"><img src="../assets/icons/hambergerMenu-icon.png" alt=""></button>
          </div>
          <div class="tog-menu">
              <div class="id-box">
                  <ul class="id">
                      <li>🔴 로그인하세요.</li>
                      <li><button id="closeButton"><img src="../assets/icons/bambergerCancel-icon.png" alt="토글 메뉴 끄기"></button></li>
                  </ul>
              </div>
              <div class="menus">
                  <div>
                      <ul class="menu">
                        <li><a href="./search.php">공연검색</a></li>
                          <li><a href="./list.php">공연목록</a></li>
                          <li><a href="">메뉴1</a></li>
                          <li><a href="">메뉴1</a></li>
                      </ul>
                  </div>
                  <div>
                          <ul class="as">
                              <li>관리자 페이지</li>
                              <li>로그아웃</li>
                          </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>