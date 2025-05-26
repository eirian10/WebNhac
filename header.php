<div class="Header">
  <!-- Logo -->
  <div class="Logo">
    <a href="trangchu.php">
      <img src="imageWeb/logo.png" alt="" />
    </a>
  </div>
  <!-- Main menu -->
  <div class="Menu">
    <ul>
      <li>
        <a href="trangchu.php">Home</a>
      </li>
      <li>
        <a href="Category copy.php">Thể loại</a>
      </li>
      <li>
        <a href="nghesi.php">Album</a>
      </li>
      <li>
        <a href="#">Playlist</a>
      </li>
      <li>
        <a href="#">BXH</a>
      </li>

      <li id="Other">
        <a href="#">
          <img src="./image/Icon/Icon_others.png" alt="" />
        </a>
      </li>
    </ul>
  </div>
  <!-- Others option -->
  <div class="Other">
    <ul>
      <li>
        <div class="search-box">
          <form action="search.php" method="GET">
            <input type="text" name="query" placeholder="Tìm bài hát hoặc nghệ sĩ " autocomplete="off">
            <button type="submit">Tìm kiếm</button>
          </form>
          <div class="recent-searches">
            <p><strong>Tìm kiếm gần đây:</strong></p>
            <?php
            $history = $_SESSION['search_history'] ?? [];
            if ($history):
              foreach ($history as $keyword): ?>
                <a href="search.php?query=<?= urlencode($keyword) ?>" class="search-tag">
                  <?= htmlspecialchars($keyword) ?>
                </a>
              <?php endforeach;
            else: ?>
              <p>Chưa có tìm kiếm nào.</p>
            <?php endif; ?>
          </div>
        </div>

      </li>

      </li>
      <li class="Login">
        <a href="dangnhap.php" id="Login"> Đăng nhập </a>
      </li>
      <li class="Signin">
        <a href="dangky.php" id="Signin">Đăng ký</a>
      </li>
    </ul>
  </div>
</div>