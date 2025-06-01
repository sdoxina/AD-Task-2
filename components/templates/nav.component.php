<?php
require_once BASE_PATH . '/handlers/pageData.handler.php';
?>

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto d-flex align-items-center" href="/index.php?home_clicked=1">
      <img src="/assets/img/buttonconeLogo.png" alt="Logo" class="navbar-img">
    </a>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title d-flex align-items-center" id="offcanvasNavbarLabel">
          <img src="/assets/img/buttonconeLogo.png" alt="Buttoncone Logo">
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav ms-auto pe-3">
          <?php foreach ($navList as $navItem): ?>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 <?= $_SERVER['REQUEST_URI'] === $navItem['url'] ? 'active' : '' ?>" href="<?= $navItem['url'] ?>">
                <?= htmlspecialchars($navItem['label']) ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
