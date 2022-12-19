<?php include  $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="estj.css" />
</head>
<body>
  <nav class="navbar">
    <!-- LOGO -->
    <div class="logo">ESTJ</div>
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
        <!-- USING CHECKBOX HACK -->
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <!-- NAVIGATION MENUS -->
        <div class="menu">
            <li><a href="/">Home</a></li>
            <li class="services">
                <a href="/">ES</a>
                <!-- DROPDOWN MENU -->
                <ul class="dropdown">
                    <li><a href="/">ESTJ</a></li>
                    <li><a href="/">ESTP</a></li>
                    <li><a href="/">ESFJ</a></li>
                    <li><a href="/">ESFP</a></li>
                </ul>
            </li>
            <li class="services">
              <a href="/">IS</a>
              <!-- DROPDOWN MENU -->
              <ul class="dropdown">
                <li><a href="/">ISTJ </a></li>
                <li><a href="/">ISTP</a></li>
                <li><a href="/">ISFJ</a></li>
                <li><a href="/">ISFP</a></li>
              </ul>
          </li>
          <li class="services">
            <a href="/">IN</a>
            <!-- DROPDOWN MENU -->
            <ul class="dropdown">
              <li><a href="/">INTJ</a></li>
              <li><a href="/">INTP</a></li>
              <li><a href="/">INFJ</a></li>
              <li><a href="/">INFP</a></li>
            </ul>
        </li>
        <li class="services">
          <a href="/">EN</a>
          <!-- DROPDOWN MENU -->
          <ul class="dropdown">
            <li><a href="/">ENTJ</a></li>
            <li><a href="/">ENTP</a></li>
            <li><a href="/">ENFJ</a></li>
            <li><a href="/">ENFP</a></li>
          </ul>
      </li>
        </div>
    </ul>
</nav>
<div id="board_area"> 
  <h1>자유게시판</h1>
  <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
        </thead>
        <?php
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $sql = mq("select * from board order by idx desc limit 0,5"); 
            while($board = $sql->fetch_array())
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$board["title"]; 
              if(strlen($title)>30)
              { 
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['idx']; ?></td>
          <td width="500"><a href=""><?php echo $title;?></a></td>
          <td width="120"><?php echo $board['name']?></td>
          <td width="100"><?php echo $board['date']?></td>
          <td width="100"><?php echo $board['hit']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <div id="write_btn">
      <a href="/page/board/write.php"><button>글쓰기</button></a>
    </div>
  </div>
</body>
</html>