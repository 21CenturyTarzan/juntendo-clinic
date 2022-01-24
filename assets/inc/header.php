
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>順天堂医院</title>
  <meta name="description" content="">
  <meta property="og:site_name" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:image" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $PATH;?>/assets/css/index.css">
</head>

<body>
  <div class="wrapper">
    <header class="header js-header">
      <h1 class="header-logo">
        <a href="#">
          <img class="js-logo-pc h-logo-pc" src="<?php echo $PATH;?>/assets/images/common/h-logo.svg" alt="">
          <img class="js-logo-sp h-logo-sp" src="<?php echo $PATH;?>/assets/images/common/h-logo.svg" alt="">
        </a>
      </h1>
      <div class="sp-only sp-navBtn js-sp-navBtn">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="menu js-menu">
        <div class="menu-inner">
          <ul class="menu-list">
            <li class="menu-item -patients">
              <a class="menu-item__link" href="/guide"><span>患者さん・一般の方へ</span></a>
              <div class="patients-menu">
                <div class="patients-menu__wrap">
                  <div class="patients-menu__left">
                    <h1>患者さん・一般の方へ</h1>
                    <p>(仮)当センターの治験・臨床研究に関する 情報提供とご参加方法をご案内します。</p>
                    <a href="/guide" class="patients-menu__link">詳しく見る</a>
                  </div>
                  <div class="patients-menu__right">
                    <ul>
                      <li> <a href="/guide/introduction/">治験・臨床研究とは</a></li>
                      <li> <a href="/guide/flow/">ご参加までの流れ</a></li>
                      <li> <a href="/guide/search/">現在募集中の治験・臨床研究</a></li>
                      <li> <a href="/guide/faq/">よくあるご質問</a></li>
                      <li> <a href="/guide/about/">当センターについて</a></li>
                      <li> <a href="/???????">公開講座・講演会</a></li>
                      <li> <a href="/guide/contact/">お問い合わせ先</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item">
              <a class="menu-item__link" href="/researcher"><span>研究者の方へ</span></a>
            </li>
            <li class="menu-item">
              <a class="menu-item__link" href="/pharmaceutical"><span>企業の方へ</span></a>
            </li>
            <li class="menu-item">
              <a class="menu-item__link" href="/about"><span>当センターのご案内</span></a>
            </li>
            <li class="menu-item trans-en">
              <a class="menu-item__link" href="/en"><span>ENGLISH</span></a>
            </li>
            <li class="menu-item se-img">
              <img class="pc-only" src="<?php echo $PATH;?>/assets/images/common/search.svg" alt="">
              <div class="sp-only">
                <div class="inline-input">
                  <input type="text" placeholder="キーワードで検索する">
                  <a class="btn-submit" href="">
                    <img src="<?php echo $PATH;?>/assets/images/common/search-white.svg" alt="">
                  </a>
                </div>
              </div>
            </li>
            <li class="menu-item">
              <a class="menu-item__link contact-link" href="/contact">
                お問い合わせ
              </a>
            </li>
          </ul>
        </div>
      </nav>

    </header>
    