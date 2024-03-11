<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/search.css">
</head>

<body>
    <!-- 대가리 -->
    <header>
        <div class="head">
            <!-- 로고 및 메뉴 -->
            <div class="main-logo">
                <div class="logo">
                    <h1>공연나라</h1>
                </div>
                <!-- 메뉴 -->
                <div class="menu-container">
                    <ul>
                    <li>메뉴1</li>
                    <li>메뉴2</li>
                    <li>메뉴3</li>
                    <li>메뉴4</li>
                    </ul>
                </div>
            </div>
            <!--  검색창 및 토글 -->
            <div class="main-area">
                <nav>
                    <!-- search -->
                    <div>♥</div>
                    <!-- area -->
                    <div>서울☑</div>
                    <!-- profile -->
                    <div>★</div>
                </nav>
                <!-- 토글버튼 -->
                <div class="toggle">
                    <div class="tog-btn">
                        <button id="toggleButton"><img src="../img/hambg.png" alt=""></button>
                    </div>
                    <div class="tog-menu">
                        <div>
                            <ul class="id">
                                <li>🔴 로그인하세요.</li>
                                <li><button id="closeButton"><img src="../img/x.png" alt=""></button></li>
                            </ul>
                        </div>
                        <div class="menus">
                            <div>
                                <ul class="menu">
                                    <li>메뉴1</li>
                                    <li>메뉴2</li>
                                    <li>메뉴3</li>
                                    <li>메뉴4</li>
                                </ul>
                            </div>
                            <div>
                                    <ul class="as">
                                        <li>고객센터</li>
                                        <li>정보수정제안</li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="foot">
            <p>대표전화 0000-0000 / 이메일 000@gmail.com</p>
            <p>우) 00000 대구시 동구 동촌로 383</p>
            <p>(재)예술경영지원센터 공연예술통합전산망(www.kopis.or.kr)</p>
        </div>
    </footer>
<script src="./js/search.js"></script>
</body>

</html>