<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/detail.css">
    <script src="./js/toggleMenu.js" defer></script>
    <script type="module" src='./js/detail.js'></script>
</head>

<body>
    <div class='wrapper'>
        <!-- 대가리 -->
        <header>
            <?php include './components/header.php' ?>
        </header>

        <!-- 첫번째 섹션 -->
        <section>
            <!-- 전체 배경이미지 -->
            <div class='back'>
                <img class='back-img blur' src="./assets/img/mout.jpg" alt="">
                    <div class='fronts'>
                        <!-- 포스터 -->
                        <div class='poast-img'>
                            <img src="./assets/img/mout.jpg" alt="">
                        </div>
                        <!-- 포스터 제목 및 장소 -->
                        <div class='poast-des'>
                            <!-- 공연지역 -->
                            <div class='poast-area'>
                                서울 특별시
                            </div>
                            <!-- 공연장이름 -->
                            <div class='area-name'>
                                문화대극장
                            </div>
                            <!-- 가격보기 -->
                            <div class='show-price'>
                                <p>가격 보기</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <!-- 두번째 섹션 -->
        <section class='two'>
            <!-- 공연 정보 및 시설 sticky -->
            <div class='info-area'>
                <div><a href="#show-detail">공연 정보</a></div>
                <div><a href="#show-area">공연 시설</a></div>
            </div>
            <!-- 공연 정보 -->
            <div  id='show-detail'></div>
            <div class='show-info'>
                <!-- 공연 상세정보 -->
                <div class='info-details' >
                    <h2 >공연 상세정보</h2>
                    <!-- 정보 항목 -->
                    <div class='detailss'>
                        <div class='details'>
                            <div class='detail'>
                                <div>
                                    <img src="./assets/icons/seasson.png" alt="">
                                </div>
                                <div class='detail-seasson'>
                                    <div>공연기간</div>
                                    <div>2024.02.01 ~ 2024.04.05</div>
                                </div>
                            </div>
                        </div>
                        <div class='details'>
                            <div class='detail'>
                                <div>
                                    <img src="./assets/icons/genres.png" alt="">
                                </div>
                                <div class='detail-seasson'>
                                    <div>공연 장르</div>
                                    <div>연극</div>
                                </div>
                            </div>
                        </div>
                        <div class='details'>
                            <div class='detail'>
                                <div>
                                    <img src="./assets/icons/runtime.png" alt="">
                                </div>
                                <div class='detail-seasson'>
                                    <div>공연 런타임</div>
                                    <div>1시간 30분</div>
                                </div>
                            </div>
                        </div>
                        <div class='details'>
                            <div class='detail'>
                                <div>
                                    <img src="./assets/icons/age.png" alt="">
                                </div>
                                <div class='detail-seasson'>
                                    <div>공연 관람 연령</div>
                                    <div>만 7세 이상</div>
                                </div>
                            </div>
                        </div>
                        <div class='details'>
                            <div class='detail'>
                                <div>
                                    <img src="./assets/icons/together.png" alt="">
                                </div>
                                <div class='detail-seasson'>
                                    <div>출연진</div>
                                    <div>톰 홀랜드, 빌 게이츠, 아인슈타인</div>
                                </div>
                            </div>
                        </div>
                        <div class='details'>
                            <div class='detail'>
                                <div>
                                    <img src="./assets/icons/pd.png" alt="">
                                </div>
                                <div class='detail-seasson'>
                                    <div>제작진</div>
                                    <div>손흥민</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- 공연 정보 이미지 -->
                    <div class='info-imgs'>
                        <img src="./assets/img/mout.jpg" alt="">
                    </div>
                    <div class ='info-btn'>
                        <button>공연정보 더보기</button>
                    </div>
                </div>
            </div>
            <!-- 공연시설 및 지도 api -->
            <div id='show-area'></div>
            <div class='maps'>
                <h2>공연 시설</h2>
                <!-- 공연장 이름 -->
                <div class='map-name'>
                    <img src="./assets/icons/location.png" alt="">
                    <div>
                        <div>아리아트홀</div>
                        <div>서울특별시 종로구 대학로 8가 30 (동숭동)</div>
                    </div>
                </div>
                <!-- 공연장소 api -->
                <div></div>
            </div>
        </section>

        <!-- 세번째 섹션 -->
        <section class = 'three'>
            <div class = 'user-needs'>
                <div><img src="./assets/icons/mark.png" alt=""></div>
                <div>가격 보기</div>
            </div>
        </section>

        <!-- 푸터 -->
        <footer>
            <?php include './components/footer.php' ?>      
        </footer>
    </div>
</body>

</html>