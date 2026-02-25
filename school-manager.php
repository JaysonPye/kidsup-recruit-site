<?php
$page_title = 'Kids Up Recruit | School Manager';
$body_class = 'page-school-manager';
$page_top_title_line1 = 'スクールマネージャー';
$page_top_title_line2 = "チームを主導して\n子どもたちの可能性を大きく拡げる役割です";
$page_top_image = 'images/top-sm.jpg';
$page_top_image_mob = 'images/top-sm-mob.jpg';
$page_top_alt = 'スクールマネージャー';
include __DIR__ . '/includes/header.php';
?>
<?php include __DIR__ . '/includes/page-top.php'; ?>
<section class="sm-about-section" aria-labelledby="sm-about-title">
  <div class="ku-section__inner">
    <header class="sm-about-section__header">
      <h2 id="sm-about-title" class="sm-about-section__title">スクールマネージャーとは？</h2>
    </header>
    <div class="sm-about-grid">
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <img src="images/whats_sm-01.jpg" alt="子どもとスタッフの様子">
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">子どもやチームの成長の<br>やりがい</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">子どもたちやスタッフの成長を間近で感じながら、チームづくりにやりがいを実感できます。</p>
        </div>
      </article>
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <img src="images/whats_sm-02.jpg" alt="グローバルな環境で働くスタッフの様子">
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">グローバルな環境で働ける</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">さまざまな価値観に触れながらグローバルな環境で働くことができます</p>
        </div>
      </article>
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <img src="images/whats_sm-03.jpg" alt="キャリアアップの機会に関するイメージ">
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">裁量が大きくキャリアアップの<br>チャンスも多い</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">自分の裁量でチームをリードしながら、エリアマネージャーや統括責任者、本部スタッフなど、多彩なキャリアアップのチャンスもあります。</p>
        </div>
      </article>
    </div>
  </div>
</section>
<section class="sm-schedule-section" aria-labelledby="sm-schedule-title">
  <div class="ku-section__inner">
    <div class="sm-schedule js-sm-schedule">
      <h2 id="sm-schedule-title" class="sm-schedule__title">
        <button class="sm-schedule__toggle js-sm-schedule-toggle" type="button" aria-expanded="false" aria-controls="sm-schedule-panel">
          <span>1日のスケジュール</span>
          <span class="sm-schedule__arrow" aria-hidden="true"></span>
        </button>
      </h2>
      <div id="sm-schedule-panel" class="sm-schedule__panel js-sm-schedule-panel" hidden>
        <div class="sm-schedule__panel-inner">
          <article class="sm-schedule-item sm-schedule-item--image-left">
            <p class="sm-schedule-item__time">11:00</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">出勤</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <img src="images/schedule_01.jpg" alt="出勤時の様子">
              </div>
              <div class="sm-schedule-item__text">
                <p>満員電車を避けてゆったり出勤。</p>
                <p>朝にジムへ行ってから来るスタッフも多く、働きやすいスタイルが魅力です。</p>
                <p>出勤後は、先生たちと子どもたちの様子や1日の流れを共有するミーティングからスタート。</p>
                <p>英語ができなくても大丈夫。日本人バイリンガルスタッフがサポートしてくれます。</p>
                <p>子どもたちが来る前に、生徒・契約管理や請求関連の事務業務も落ち着いて進められます。</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-right">
            <p class="sm-schedule-item__time">13:30</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">welcome</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <img src="images/schedule_02.jpg" alt="子どもたちを迎える様子">
              </div>
              <div class="sm-schedule-item__text">
                <p>子どもたちが続々とKidsUPに到着！</p>
                <p>無料送迎バスでは、ドライバーと添乗スタッフが保護者の代わりに安全に送迎します。</p>
                <p>到着した子どもたちを明るく迎え、英語や日常の会話でコミュニケーションを楽しみます。</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-left">
            <p class="sm-schedule-item__time">16:00</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">Daily Activity</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <img src="images/schedule_03.jpg" alt="アクティビティの様子">
              </div>
              <div class="sm-schedule-item__text">
                <p>ダンスやエクササイズ、工作など、子どもたちが楽しみながら英語に触れられるアクティビティタイム。</p>
                <p>夢中で取り組む姿や、小さな成長の瞬間に気づけるのがこの仕事の大きなやりがいです。</p>
                <p>「今日こんなことができるようになったんだ！」という発見が毎日あります。</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-right">
            <p class="sm-schedule-item__time">16:30</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">生徒帰宅</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <img src="images/schedule_04.jpg" alt="生徒帰宅時の様子">
              </div>
              <div class="sm-schedule-item__text">
                <p>保護者のお迎えや帰りの送迎バスが出発。</p>
                <p>お迎えに来た保護者には、お子さまの様子を丁寧にフィードバックします。</p>
                <p>その後は翌日の準備や教室のクリーニングを行い、明日のレッスンに備えます。</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-left">
            <p class="sm-schedule-item__time">20:00</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">退勤</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <img src="images/schedule_05.jpg" alt="退勤時の様子">
              </div>
              <div class="sm-schedule-item__text">
                <p>平均残業は月9時間とほぼなし。</p>
                <p>持ち帰り仕事もないため、仕事後はしっかりリフレッシュできます。</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sm-hr-section" aria-labelledby="sm-hr-title">
  <img class="sm-hr-section__deco" src="images/learn-with-fun.png" alt="" aria-hidden="true">
  <div class="ku-section__inner">
    <header class="sm-hr-section__header">
      <div class="sm-hr-title-wrap">
        <img class="sm-hr-title-wrap__bg" src="images/hr-required.png" alt="" aria-hidden="true">
        <h2 id="sm-hr-title" class="sm-hr-title-wrap__label">
          <span>求める人材</span>
        </h2>
      </div>
    </header>
    <?php
    $sm_hr_items = [
      [
        'num' => '01',
        'image' => 'images/hr_01.jpg',
        'alt' => '子どもたちとスタッフの様子',
        'html' => "子どもたちの成長に寄り添い<br>笑顔を生み出す仕事に<br>挑戦したい方",
      ],
      [
        'num' => '02',
        'image' => 'images/hr_02.jpg',
        'alt' => '屋外で活動する子どもたちとスタッフの様子',
        'html' => "英語を使いながら自分自身も<br>スキルアップしていきたい方<br><span class=\"sm-hr-item__note\">(英語力は不問です)</span>",
      ],
      [
        'num' => '03',
        'image' => 'images/hr_03.jpg',
        'alt' => '教室で活動する子どもとスタッフの様子',
        'html' => "チームで力を発揮し、教育の<br>現場づくりに主体的に<br>関わりたい方",
      ],
      [
        'num' => '04',
        'image' => 'images/hr_04.jpg',
        'alt' => 'スタッフ集合写真',
        'html' => "新しいことに前向きに取り組み、<br>自分の可能性を<br>拡げたい方",
      ],
      [
        'num' => '05',
        'image' => 'images/hr_05.jpg',
        'alt' => '子どもとスタッフの学びの様子',
        'html' => "子どもが好きでやる気があれば<br>未経験の方も大歓迎！<br><span class=\"sm-hr-item__nowrap\">研修でしっかりとサポートしていきます</span>",
      ],
    ];
    ?>
    <div class="sm-hr-list">
      <?php foreach ($sm_hr_items as $index => $item): ?>
        <?php
        $is_image_right = ($index % 2) === 0;
        $is_text_left = ($index % 2) === 0;
        $num_asset_rel = 'images/hr' . $item['num'] . '.png';
        $num_asset_path = __DIR__ . '/' . $num_asset_rel;
        ?>
        <article class="sm-hr-item sm-hr-item--n<?php echo htmlspecialchars($item['num'], ENT_QUOTES, 'UTF-8'); ?> <?php echo $is_image_right ? 'is-image-right' : 'is-image-left'; ?> <?php echo $is_text_left ? 'is-text-left' : 'is-text-right'; ?>">
          <div class="sm-hr-item__copy">
            <span class="sm-hr-item__num" aria-hidden="true">
              <?php if (is_file($num_asset_path)): ?>
                <img src="<?php echo htmlspecialchars($num_asset_rel, ENT_QUOTES, 'UTF-8'); ?>" alt="">
              <?php else: ?>
                <span class="sm-hr-item__num-fallback"><?php echo htmlspecialchars($item['num'], ENT_QUOTES, 'UTF-8'); ?></span>
              <?php endif; ?>
            </span>
            <p class="sm-hr-item__text"><?php echo $item['html']; ?></p>
          </div>
          <div class="sm-hr-item__media">
            <img src="<?php echo htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($item['alt'], ENT_QUOTES, 'UTF-8'); ?>">
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
