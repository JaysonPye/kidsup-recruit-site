<?php
$page_title = 'Kids Up Recruit';
$body_class = 'page-home';
include __DIR__ . '/includes/header.php';
?>
<?php include __DIR__ . '/includes/page-top.php'; ?>
<section class="ku-section ku-section--blue about-section">
  <div class="ku-section__inner">
    <header class="about-header">
      <div class="ku-section-heading ku-section-heading--image ku-section-heading--white">
        <img class="ku-section-heading__image" src="images/about_us.png" alt="About us">
        <p class="ku-section-heading__subtitle">会社を知る</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>
    <div class="about-body">
      <div class="about-text ku-text-glow">
        <p>
          <span class="about-text__line">「KidsUP」は学童保育型英会話スクールです。</span>
          <br class="about-text__break">
          <span class="about-text__line">子供たちの英語力はもちろん、社会で活躍するための自信と</span>
          <br class="about-text__break">
          <span class="about-text__line">総合的な人間力を育みます。保護者様に安心していただける</span>
          <br class="about-text__break">
          <span class="about-text__line">サービス環境と、高品質なカリキュラムでお子様の成長をサポートします。</span>
        </p>
      </div>
      <div class="about-media">
        <img src="images/about_us.jpg" alt="KidsUPの活動の様子">
      </div>
    </div>
    <details class="about-details">
      <summary class="about-summary">
        詳しく見る
        <span class="about-summary__icon" aria-hidden="true"></span>
      </summary>
      <div class="about-points">
        <ul class="about-points__list">
          <li class="about-point">
            <span class="about-point__num">01</span>
            <span>安全、快適な環境の中で、子供たちに沢山の 「挑戦と体験」をさせることで「自信」と「未来を生きぬく力」を身に着けさせる。</span>
          </li>
          <li class="about-point">
            <span class="about-point__num">02</span>
            <span>最適な時期に最適な方法で、高い英語力を身に着けさせ、子供たちの可能性を大きく拡げる。</span>
          </li>
          <li class="about-point">
            <span class="about-point__num">03</span>
            <span>全社員は、高い志を持ち、目標にコミットする中で 日々成長する。チーム力を高め、全ての人にとって居心地の良い環境を造る。</span>
          </li>
          <li class="about-point">
            <span class="about-point__num">04</span>
            <span>我々は、常に３つの理念にコミットした、最高のプロフェッショナル集団を目指す。</span>
          </li>
        </ul>
      </div>
    </details>
  </div>
</section>
<section class="ku-section ku-section--white stats-section">
  <div class="ku-section__inner">
    <header class="about-header">
      <div class="ku-section-heading ku-section-heading--image ku-section-heading--orange">
        <img class="ku-section-heading__image" src="images/work_style.png" alt="Work style">
        <p class="ku-section-heading__subtitle">働く魅力</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>
    <div class="stats-row">
      <div class="stats-row__header">
        <div class="stats-header">
          <div class="stats-header__media">
            <img class="stats-header__image" src="images/01.png" alt="01">
            <div class="stats-header__text">
              <p class="stats-header__title">スクール売り上げ</p>
              <p class="stats-header__meta">売上：25.2億（2025年 2月期）</p>
            </div>
          </div>
        </div>
      </div>
      <div class="stats-row__graph">
        <img src="images/graph-1.png" alt="スクール売り上げグラフ">
      </div>
    </div>
    <div class="stats-row stats-row--reverse">
      <div class="stats-row__header">
        <div class="stats-header">
          <div class="stats-header__media">
            <img class="stats-header__image" src="images/02.png" alt="02">
            <div class="stats-header__text">
              <p class="stats-header__title">スクール数</p>
              <p class="stats-header__meta">スクール数：36校（2025年11月時点）</p>
            </div>
          </div>
        </div>
      </div>
      <div class="stats-row__graph">
        <img src="images/graph-2.png" alt="スクール数グラフ">
      </div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
