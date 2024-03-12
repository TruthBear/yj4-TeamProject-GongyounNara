<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/list.css">
    <script src="./js/toggleMenu.js" defer></script>
    <script type="module" src="./js/list.js" defer></script>

</head>

<body>
    <!-- 대가리 -->
    <header>
      <?php include './components/header.php' ?>
    </header>
    
    <!-- 장르 -->
    <section>
        <div class="main-title">
            <!-- title -->
            <div class="title">
                <div class="area">
                    <strong><p>서울공연</p></strong>
                </div>
                <div class="day-age">
                    <div>날짜</div>
                    <input type="checkbox" name="kid" id="kid">
                    <label for="kid">아동</label>
                </div>
            </div>
            <!-- genre -->

          <div class="genres">
              <div class="grid-container">
                <div>
                  <input type="radio" name="genre" id="all" value="" checked >
                  <input type="radio" name="genre" id="theater" value="AAAA" >
                  <input type="radio" name="genre" id="dance" value="BBBC" >
                  <input type="radio" name="genre" id="public-dance" value="BBBE" >
                  <input type="radio" name="genre" id="european-classical-music" value="CCCA" >
                  <input type="radio" name="genre" id="korean-classical-music" value="CCCC" >
                  <input type="radio" name="genre" id="popular-music" value="CCCD" >
                  <input type="radio" name="genre" id="mixed" value="EEEA" >
                  <input type="radio" name="genre" id="circus-magic" value="EEEB" >
                  <input type="radio" name="genre" id="musical" value="GGGA" >
                </div>
                <ul class="grid-item">
                    <li><label for="all">전체</label></li>
                    <li><label for="theater">연극</label></li>
                    <li><label for="dance">무용</label></li>
                    <li><label for="public-dance">대중무용</label></li>
                    <li><label for="european-classical-music">클래식</label></li>
                    <li><label for="korean-classical-music">국악</label></li>
                    <li><label for="popular-music">대중음악</label></li>
                    <li><label for="mixed">복합</label></li>
                    <li><label for="circus-magic">서커스/마술</label></li>
                    <li><label for="musical">뮤지컬</label></li>
                </ul>
              </div>
          </div>
        </div>
    </section>

    <!-- 공연내용 -->
    <section>
        <div class="area-shows">
            <div class="area-show">
                <div class="a-show">
                    <!-- img -->
                    <div class="a-img">
                        <img src="https://images.unsplash.com/photo-1509824227185-9c5a01ceba0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="">
                    </div>
                    <!-- description -->
                    <div class="a-description">   
                        <ul>
                            <li><strong>공연제목</strong></li>
                            <li>24.02.29 ~ 24.03.29</li>
                            <li>뮤지컬</li>
                        </ul>
                    </div>
                </div>
                <div class="a-show">
                    <!-- img -->
                    <div class="a-img">
                        <img src="https://images.unsplash.com/photo-1509824227185-9c5a01ceba0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="">
                    </div>
                    <!-- description -->
                    <div class="a-description">   
                        <ul>
                            <li><strong>공연제목</strong></li>
                            <li>24.02.29 ~ 24.03.29</li>
                            <li>뮤지컬</li>
                        </ul>
                    </div>
                </div>
                <div class="a-show">
                    <!-- img -->
                    <div class="a-img">
                        <img src="https://images.unsplash.com/photo-1509824227185-9c5a01ceba0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="">
                    </div>
                    <!-- description -->
                    <div class="a-description">   
                        <ul>
                            <li><strong>공연제목</strong></li>
                            <li>24.02.29 ~ 24.03.29</li>
                            <li>뮤지컬</li>
                        </ul>
                    </div>
                </div>
                <div class="a-show">
                    <!-- img -->
                    <div class="a-img">
                        <img src="https://images.unsplash.com/photo-1509824227185-9c5a01ceba0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="">
                    </div>
                    <!-- description -->
                    <div class="a-description">   
                        <ul>
                            <li><strong>공연제목</strong></li>
                            <li>24.02.29 ~ 24.03.29</li>
                            <li>뮤지컬</li>
                        </ul>
                    </div>
                </div>
                <div class="a-show">
                    <!-- img -->
                    <div class="a-img">
                        <img src="https://images.unsplash.com/photo-1509824227185-9c5a01ceba0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="">
                    </div>
                    <!-- description -->
                    <div class="a-description">   
                        <ul>
                            <li><strong>공연제목</strong></li>
                            <li>24.02.29 ~ 24.03.29</li>
                            <li>뮤지컬</li>
                        </ul>
                    </div>
                </div>
                <div class="a-show">
                    <!-- img -->
                    <div class="a-img">
                        <img src="https://images.unsplash.com/photo-1509824227185-9c5a01ceba0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="">
                    </div>
                    <!-- description -->
                    <div class="a-description">   
                        <ul>
                            <li><strong>공연제목</strong></li>
                            <li>24.02.29 ~ 24.03.29</li>
                            <li>뮤지컬</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

        <!-- 푸터 -->
        <footer>
          <?php include './components/footer.php' ?>
        </footer>
</body>


</html>