<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <!-- <title>けいびる歯科医院｜多摩市聖蹟桜ヶ丘駅徒歩1分・年中無休</title> -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <!-- <meta name="viewport" content="width=375"> ここを編集したよ-->
    <?php if (is_front_page()): ?>
      <meta name="description" content="けいびる歯科医院は、多摩市聖蹟桜ヶ丘駅徒歩１分、年中無休で平日20時まで診療しています。患者様一人ひとりに合った治療と高度な技術の提供で、お子様から大人から年配者まで、通いやすい歯医者です。なるべく抜かない・削らない・痛くない治療を心がけています。">

    <?php endif ?>
    






    <!-- <meta name=”robots” content=”noindex” /> -->
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/js/hamburger/drawer/css/drawer.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/js/hamburger/drawer/css/drawer.min2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/js/slick/slick.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/js/slick/slick-theme.css" media="screen" />
    <link rel="icon" type="image/gif" href="/favicon.gif">
    <!-- スマホ対応コード -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php if (is_mobile()) { ?>
     <meta name="viewport" content="width=375">
   <?php } else { ?>
     <meta name="viewport" content="width=1200">
   <?php } ?>


<?php wp_head(); ?>
  </head>

  <body class="drawer drawer--right">
    <nav class="drawer-nav" role="navigation">
      <div class="inner">
          <ul class="drawer-menu">
              <li>
                  <img id="close-drawer" src="<?php echo get_template_directory_uri() ?>/img/menu_x_light.png" alt="閉じる"
                       aria-hidden="true">
              </li>
              <a href="<?php echo home_url('/') ?>">
                <li>
                  <p>トップ</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/general_dentistry/') ?>">
                <li>
                  <p>虫歯治療</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/perio/') ?>">
                <li>
                  <p>歯周病</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/pediatric_dentistry/') ?>">
                <li>
                  <p>小児歯科</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/implant/') ?>">
                <li>
                  <p>インプラント</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/cosmetic_dentistry/') ?>">
                <li>
                  <p>審美歯科</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/preventivedentistry/') ?>">
                <li>
                  <p>予防歯科</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/oral_surgery/') ?>">
                <li>
                  <p>口腔外科</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/ortho/') ?>">
                <li>
                  <p>矯正</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/doctor_staff/') ?>">
                <li>
                  <p>ドクター・スタッフ紹介</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/clinic_introduction/') ?>">
                <li>
                  <p>院内の紹介</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/reception_time/') ?>">
                <li>
                  <p>診療時間・アクセス</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
              <a href="<?php echo home_url('/recruit/') ?>">
                <li>
                  <p>スタッフ募集</p>
                  <img style="width:20px;" src="<?php echo get_template_directory_uri() ?>/img/hamburger_>.png" alt="メニュー矢印">
                </li>
              </a>
          </ul>
      </div>
    </nav>




    <header>
      <a href="<?php echo home_url('/') ?>">
        <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="けいびる歯科医院ロゴ">
      </a>
      <div class="pc">
        <div class="cover">
          <div class="tel_info">
            <div class="tel">
              <img class="tel_icon" src="<?php echo get_template_directory_uri() ?>/img/tel_icon.png" alt="TELアイコン">
              <p>042-337-4388</p>
            </div>
            <div class="tel_time">
              <p>電話受付 平日 9:00〜20:00</p>
              <p>土 9:00〜17:00　日・祝 9:00〜16:00</p>
            </div>
          </div>
          <img class="menu_btn" src="<?php echo get_template_directory_uri() ?>/img/menu_light.png" alt="メニューボタン">
        </div>
      </div>


      <div class="sp">
        <div class="cover_sp">
          <div class="tel_info_sp">
            <a class="tel_cover_sp" href="tel:0423374388">
              <div class="tel_sp">
                <p class="tap_txt">
                  タップして<br>
                  電話する
                </p>
                <div class="number_cover">
                  <img class="tel_icon_sp" src="<?php echo get_template_directory_uri() ?>/img/tel_icon_sp.png" alt="TELアイコン">
                  <div class="tel_time_sp">
                  <p class="number">042-337-4388</p>
                  </div>
                </div>
              </div>
              <div class="tel_span_txt">
                <p>電話受付 平日 9:00〜20:00【土〜17:30/日祝〜16:00】</p>
              </div>
            </a>
          </div>
          <img class="menu_btn" src="<?php echo get_template_directory_uri() ?>/img/menu_light.png" alt="メニューボタン">
        </div>
      </div>


      <!-- <div class="sp">
        <div class="drawer-toggle drawer-hamburger hammenu hamburger">
          <img src="<?php echo get_template_directory_uri() ?>/img/menu.png" alt="メニュー" aria-hidden="true">
        </div>
      </div> -->
    </header>
