<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>防水工事・外壁改修工事　株式会社Ti-PROOF</title>
  <meta name="description" content="埼玉県越谷市を拠点に関東一円で防水工事・外壁改修工事を行なっている株式会社Ti-PROOFは、現在、業務拡大につき現場作業員を求人しております。経験者・未経験者ともに大歓迎ですのでお気軽にご連絡ください。現在、弊社では協力会社の募集もしております。">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/会社ロゴ.png">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
  <!--------------------スライダー見た目-------------------------------------------------->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <!------------------------------------------------------------------------------------->

  <!--------------------jQuery----------------------------------------------------------->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <!------------------------------------------------------------------------------------->

  <!--------------------スライダー動かすやつ----------------------------------------------->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <!------------------------------------------------------------------------------------->

  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="株式会社Ti-PROOF"></a>

    <nav class="nav-pc">
      <a href="<?php echo home_url(); ?>/company">会社概要</a>
      <a href="<?php echo home_url(); ?>/services">業務内容</a>
      <a href="<?php echo home_url(); ?>/#works">施工実績</a>
      <a href="<?php echo home_url(); ?>/recruit">求人情報</a>
      <a href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
    </nav>
    <nav class="nav-right">
      <a href="<?php echo home_url(); ?>/contact" class="menu-link"><span>お仕事のご依頼・</span><span>お問い合わせ</span><br><img
          src="<?php echo get_template_directory_uri(); ?>/img/アイコン/tel.png">&emsp;048-940-8935&emsp;&rsaquo;</a>
      <a href="<?php echo home_url(); ?>/application" class="menu-link">求人へ応募はこちら&emsp;&rsaquo;</a>
    </nav>


    <!-- スマホ用メニューボタン -->
    <a class="menu-phone" href="tel:+81489408935" onclick="document.getElementById('nav-sp').style.display = 'none'"><img
    src="<?php echo get_template_directory_uri(); ?>/img/アイコン/tel.png"></a>
    <img class="menu-sp" src="<?php echo get_template_directory_uri(); ?>/img/アイコン/ハンバーガーメニュー.png" alt="ナビゲーションを開く"
      onclick="document.getElementById('nav-sp').style.display = 'block'">
    <!-- スマホ用ナビゲーション -->
    <nav id="nav-sp">
      <img class="close" src="<?php echo get_template_directory_uri(); ?>/img/アイコン/クローズボタン.png" alt="ナビゲーションを閉じる"
        onclick="document.getElementById('nav-sp').style.display = 'none'">
      <a class="logo-sp" href="<?php echo esc_url(home_url('/')); ?>" onclick="document.getElementById('nav-sp').style.display = 'none'">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="トップページに戻る"></a>
      <a class="menu menu-arrow1" href="<?php echo home_url(); ?>/company"
        onclick="document.getElementById('nav-sp').style.display = 'none'">会社概要</a>
      <a class="menu menu-arrow2" href="<?php echo home_url(); ?>/services"
        onclick="document.getElementById('nav-sp').style.display = 'none'">業務内容</a>
      <a class="menu menu-arrow3" href="<?php echo home_url(); ?>/#works"
        onclick="document.getElementById('nav-sp').style.display = 'none'">施工実績</a>
      <a class="menu menu-arrow4" href="<?php echo home_url(); ?>/recruit"
        onclick="document.getElementById('nav-sp').style.display = 'none'">求人情報</a>
      <a class="menu menu-arrow5" href="<?php echo home_url(); ?>/contact"
        onclick="document.getElementById('nav-sp').style.display = 'none'">お問い合わせ</a>
      <a class="menu menu-right1" href="<?php echo home_url(); ?>/contact"
        onclick="document.getElementById('nav-right-sp').style.display = 'none'">
        <p>お仕事のご依頼・お問い合わせ</p>
        <p><img src="<?php echo get_template_directory_uri(); ?>/img/アイコン/tel.png">048-940-8935</p>
      </a>
      <a class="menu menu-right2" href="<?php echo home_url(); ?>/application"
        onclick="document.getElementById('nav-right-sp').style.display = 'none'">求人へ応募はこちら</a>
    </nav>

  </header>