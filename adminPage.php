<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css"/>
    <link rel="stylesheet" href="./css/adminPage.css"/>
    <title>Document</title>
</head>
<body>
  <div class="admin-page-wrap">
  <header>
    <?php include './components/header.php' ?>
  </header>
  <!-- 모바일 -->
  <div class="mobile-wrap">
    <section>
      <div class="member">
        <div class="member-list">회원관리</div>
        <div class="member-title">
          <div class="m-num">번호</div>
          <div class="m-id">아이디</div>
        </div>
        <div class="members-info">
          <div class="m-num">4</div>
          <div class="m-id">kd04205</div>
        </div>
        <div class="members-info">
          <div class="m-num">3</div>
          <div class="m-id">kd04205</div>
        </div>
        <div class="members-info">
          <div class="m-num">2</div>
          <div class="m-id">kd04205</div>
        </div>
        <div class="members-info">
          <div class="m-num">1</div>
          <div class="m-id">kd04205</div>
        </div>
      </section>
    <div class="modal">
      <div class="modal-title">
        <div>상세 정보</div>
        <img class="close-btn" src="./assets/icons/close.png"/>
      </div>
      <div class="members-detail">
        <div class="detail-sort">아이디</div>
        <div class="detail-info">kd04205</div>
      </div>
      <div class="members-detail">
        <div class="detail-sort">이메일</div>
        <div class="detail-info">kd04205@naver.com</div>
      </div>
      <div class="members-detail">
        <div class="detail-sort">이름</div>
        <div class="detail-info">kd04205</div>
      </div>
      <div class="members-detail">
        <div class="detail-sort">유형</div>
        <div class="detail-info">일반 회원</div>
      </div>
      <div class="members-detail">
        <div class="detail-sort">가입일</div>
        <div class="detail-info">2024-03-21 16:42:15</div>
      </div>
      <button class="delete">삭제</button>
    </div>
    </div>
    <!-- pc -->
    <div class="pc-wrap">
      <section>
        <div class="member">
          <div class="member-list">회원관리</div>
          <div class="member-title">
            <div class="col1">번호</div>
            <div class="col2">아이디</div>
            <div class="col3">이메일</div>
            <div class="col4">이름</div>
            <div class="col5">유형</div>
            <div class="col6">가입일</div>
            <div class="col7">삭제</div>
          </div>
          <div class="pc-members-info">
            <div class="col1">4</div>
            <div class="col2">kd04205</div>
            <div class="col3">kd04205@naver.com</div>
            <div class="col4">이름</div>
            <div class="col5">일반 회원</div>
            <div class="col6">2024-03-21 16:42:15</div>
            <button class="delete">삭제</button>
          </div>
          <div class="pc-members-info">
            <div class="col1">3</div>
            <div class="col2">xmfkdnak98</div>
            <div class="col3">xmfkdnak98@naver.com</div>
            <div class="col4">최진영</div>
            <div class="col5">어드민</div>
            <div class="col6">2024-03-21 16:42:15</div>
            <button class="delete">삭제</button>
          </div>
          <div class="pc-members-info">
            <div class="col1">2</div>
            <div class="col2">kd04205</div>
            <div class="col3">kd04205@naver.com</div>
            <div class="col4">이름</div>
            <div class="col5">일반 회원</div>
            <div class="col6">2024-03-21 16:42:15</div>
            <button class="delete">삭제</button>
          </div>
          <div class="pc-members-info">
            <div class="col1">1</div>
            <div class="col2">kd04205</div>
            <div class="col3">kd04205@naver.com</div>
            <div class="col4">이름</div>
            <div class="col5">일반 회원</div>
            <div class="col6">2024-03-21 16:42:15</div>
            <button class="delete">삭제</button>
          </div>
        </div>
      </section>
    </div>
    <footer>
      <?php include './components/footer.php' ?>
    </footer>
  </div>
  <script src="./js/adminPage.js"></script>
</body>
</html>