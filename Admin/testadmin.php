<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Trang Admin Âm Nhạc</title>
  <style>
    /* RESET CƠ BẢN */
    * {
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica, sans-serif;
      box-sizing: border-box;
    }

    /* FLEX TRANG TOÀN BỘ */
    html,
    body {
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    body {
      padding-top: 70px;
      /* để tránh header fixed che nội dung */
    }

    /* HEADER */
    .header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 70px;
      background-color: deepskyblue;
      font-size: 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 1000;
      border-bottom: red double 2px;
    }

    .logo {
      margin-left: 30px;
    }

    .logo img {
      flex-shrink: 0;
      width: 90px;
      height: 60px;
      border-radius: 50%;
      border: 3px inset red;
      background-color: white;

    }

    .menu {
      margin-right: 60px;
    }

    .menu a {
      font-weight: bold;
      color: #fff;
      text-decoration: none;
      margin-left: 20px;
    }

    /* CONTAINER CHÍNH */
    .container-admin-left {
      display: flex;
      padding-bottom: 20px;
    }

    /* SIDEBAR */
    aside {
      width: 60%;
      background-color: #f5f5f5;
      padding-top: 20px;
      border-right: 3px double red;
      background-image: url(adminbackground.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      padding: 0;
    }

    aside ul {
      list-style: none;
    }

    aside li {
      padding: 14px 20px;
      color: deepskyblue;
      font-weight: bold;
      cursor: pointer;
      border-bottom: 3px solid red;
    }

    /* PHẦN MAIN */
    .main {

      padding: 20px;
      background-color: #ffffff;
    }

    .main h1 {
      color: #092BFF;
      font-size: 36px;
      margin-bottom: 10px;
    }

    .main p {
      font-size: 18px;
      color: #333;
    }

    /* FOOTER */
    .footer {
      background-color: deepskyblue;
      color: #FFFFFF;
      text-align: center;
      padding: 15px;
      font-size: 16px;
      border-top: red double 2px;
      width: 100%;
      height: 70px;
    }
  </style>
</head>

<body>

  <!-- HEADER -->
  <div class="header">
    <div class="logo">
      <img src="logo.png" alt="logo">
    </div>

    <div class="menu">
      <a href="#">
        Trang chủ
      </a>
      <a href="#">Đăng xuất</a>
    </div>
  </div>

  <!-- BODY -->
  <div class="container-admin-left">
    <!-- SIDEBAR -->
    <aside>
      <ul>
        <li>🎧 Quản lý bài hát</li>
        <li>👤 Quản lý ca sĩ</li>
        <li>📂 Quản lý Banner</li>
        <li>📢 Quản lý quảng cáo</li>
      </ul>
    </aside>

    <!-- MAIN -->
    <main>

    </main>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    © 2025 Admin Chill With Me | Liên hệ kỹ thuật: group5@gmail.com | Phiên bản 1.0.0
  </div>

</body>

</html>