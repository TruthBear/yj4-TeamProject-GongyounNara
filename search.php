<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/search.css">
    <script src="./js/toggleMenu.js" defer></script>
</head>

<body>
    <!-- 대가리 -->
    <header>
      <?php include './components/header.php' ?>
    </header>

    <!--  검색창 -->
    <section>
        <div class="search-area">
            <div class="inputWrap">
                <div>🔍︎</div>													
                <input type="text" class="form-control" placeholder="🔍︎  검색어를 입력하세요"   >
                <button class="btnClear"><img src="./assets/icons/inputCancle-icon.png" alt=""></button>
            </div>	     
        </div>
    </section>

    <!-- 공연 list -->
    <section class="list">
        <div class="searchs">
            <div class="search-result">
                <h2>검색결과</h2>
            </div>
            <div class="searchs-show">
                      <!-- show -->
            <div class="search-show">
                <!-- img -->
                <div class="search-img">
                    <img src="https://images.unsplash.com/photo-1509824227185-9c5a01ceba0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="">
                </div>
                <!-- description -->
                <div class="search-description">   
                    <ul>
                        <li><strong>공연제목</strong></li>
                        <li>24.02.29 ~ 24.03.29</li>
                        <li>뮤지컬</li>
                    </ul>
                    <!-- <div class="search-genre">
                    </div> -->
                    <div class="search-now">
                        <h1>공연중</h1>
                    </div>
                </div>
            </div>
             <!-- show -->
             <div class="search-show">
                <!-- img -->
                <div class="search-img">
                    <img src="https://images.unsplash.com/photo-1509824227185-9c5a01ceba0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="">
                </div>
                <!-- description -->
                <div class="search-description">   
                    <ul>
                        <li><strong>공연제목</strong></li>
                        <li>24.02.29 ~ 24.03.29</li>
                        <li>뮤지컬</li>
                    </ul>
                    <div class="search-now">
                        <h1>공연중</h1>
                    </div>
                </div>
            </div>
             <!-- show -->
             <div class="search-show">
                <!-- img -->
                <div class="search-img">
                    <img src="https://images.unsplash.com/photo-1509824227185-9c5a01ceba0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="">
                </div>
                <!-- description -->
                <div class="search-description">   
                    <ul>
                        <li><strong>공연제목</strong></li>
                        <li>24.02.29 ~ 24.03.29</li>
                        <li>뮤지컬</li>
                    </ul>
                    <div class="search-now">
                        <h1>공연중</h1>
                    </div>
                </div>
            </div>
             <!-- show -->
             <div class="search-show">
                <!-- img -->
                <div class="search-img">
                    <img src="https://images.unsplash.com/photo-1509824227185-9c5a01ceba0d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGNvbmNlcnR8ZW58MHx8MHx8fDA%3D" alt="">
                </div>
                <!-- description -->
                <div class="search-description">   
                    <ul>
                        <li><strong>공연제목</strong></li>
                        <li>24.02.29 ~ 24.03.29</li>
                        <li>뮤지컬</li>
                    </ul>
                    <div class="search-now">
                        <h1>공연중</h1>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- 푸터 -->
    <footer>
      <?php include './components/header.php' ?>
    </footer>
<script src="./js/search.js"></script>
</body>

</html>