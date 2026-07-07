<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- ヘッダー（静的サイト同一） -->
<header>
  <div class="header-container">
    <h1 class="logo">
      <a href="https://okrako.com/">
        <img src="https://okrako.com/images/okrako_header.png" alt="グループホームおけらこロゴ" class="logo-image" />
      </a>
    </h1>
    <nav>
      <div class="menu-toggle" id="menu-toggle">&#9776;</div>
      <ul class="nav-menu" id="nav-menu">
        <li><a href="https://okrako.com/index.html">ホーム</a></li>
        <li><a href="https://okrako.com/greeting.html">代表挨拶</a></li>
        <li><a href="https://okrako.com/facilities.html">施設紹介</a></li>
        <li><a href="https://okrako.com/admission.html">入居案内</a></li>
        <li><a href="https://okrako.com/company.html">会社概要</a></li>
        <li><a href="https://okrako.com/recruiting.html">採用情報</a></li>
        <li><a href="<?php echo home_url('/'); ?>">スタッフブログ</a></li>
        <li><a href="https://okrako.com/form.html">お問い合わせ</a></li>
      </ul>
    </nav>
  </div>
</header>
