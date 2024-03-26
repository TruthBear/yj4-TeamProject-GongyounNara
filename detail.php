<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/detail.css">
    <link rel="stylesheet" href="./css/header.css">
    <script src="./js/toggleMenu.js" defer></script>
    <script type="module" src='./js/detail.js'></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=a75f6db1726414effe55a0976b9eb28b"></script>
</head>

<body>
        <!-- 대가리 -->
        <header>
            <?php include './components/header.php' ?>
        </header>

        <!-- 첫번째 섹션 -->
        <section>
            <div class="back">
                <img class='back-img blur' src="./assets/img/mout.jpg" alt="">
                <div class="fronts">
                    <div class="poast-img">
                        <img src="./assets/img/mout.jpg" alt="">
                    </div>
                    <div class="poast-des">
                        <div>
                            <div>
                                <img src="../assets/icons/location-white.svg" alt="">
                            </div>
                            <div class="poast-area">
                                서울 특별시
                            </div>
                        </div>
                        <div class="area-name">
                            문화대극장
                        </div>
                        <div class="show-price">
                            <p>가격 보기</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div id='second'>
        <!-- 두번째 섹션 -->
        <section class="two">
            <div class="two-info">
                <div class="info-area">
                    <div class="wrap-show-detail"><a href="#show-detail">공연 정보</a></div>
                    <div class="wrap-show-area"><a href="#show-area">공연 시설</a></div>
                </div>
                <div id="show-detail"></div>
                <div class="show-info">
                    <div class="info-details">
                        <h2>공연 상세정보</h2>
                        <div class="detailss">
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/seasson.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>공연기간</div>
                                        <div class="seasson"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/genres.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>공연 장르</div>
                                        <div class="genre"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/runtime.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>공연 시간</div>
                                        <div class="runtime"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/age.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>공연 관람 연령</div>
                                        <div class="age"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/together.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>출연진</div>
                                        <div class="cast"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="details">
                                <div class="detail">
                                    <div>
                                        <img src="./assets/icons/pd.png" alt="">
                                    </div>
                                    <div class="detail-seasson">
                                        <div>제작진</div>
                                        <div class="pd"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="show-schedule">
                            <div>공연 스케줄</div>
                            <div class="schedule"></div>
                        </div>
                        <div class="info-imgs">
                            <img src="./assets/img/mout.jpg" alt="">
                        </div>
                        <div class="info-btn">
                            <button>공연정보 더보기</button>
                        </div>
                    </div>
                    <div id="show-area"></div>
                    <div class="maps">
                        <h2>공연 시설</h2>
                        <div class="map-name">
                            <img src="./assets/icons/location.png" alt="">
                            <div>
                                <div class="location-name">아리아트홀</div>
                                <div class="show-location">서울특별시 종로구 대학로 8가 30 (동숭동)</div>
                            </div>
                        </div>
                        <div class="kakao-map">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class='pc-prices'>
            <div>
                <div class="show-schedule">
                    <div>공연 스케줄</div>
                    <div class="pc-schedule"></div>
                </div>
            </div>
            <div>
                <div class = 'user-needs'>
                    <div><img src="./assets/icons/mark.png" alt=""></div>
                    <div>예매하기</div>
                </div>
            </div>
        </section>
    </div>

   
        <!-- 세번째 섹션 -->
        <section class = 'three'>
            <div class = 'user-needs'>
                <div><img src="./assets/icons/mark.png" alt=""></div>
                <div>예매하기</div>
            </div>
        </section>

        <!-- 푸터 -->
        <footer>
            <?php include './components/footer.php' ?>      
        </footer>

</body>

</html>