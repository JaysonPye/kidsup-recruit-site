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
          <?php echo ku_image('images/whats_sm-01.jpg', '子どもとスタッフの様子'); ?>
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">子どもやチームの成長の<br>やりがい</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">子どもたちやスタッフの成長を間近で感じながら、チームづくりにやりがいを実感できます。</p>
        </div>
      </article>
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <?php echo ku_image('images/whats_sm-02.jpg', 'グローバルな環境で働くスタッフの様子'); ?>
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">グローバルな環境で働ける</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">さまざまな価値観に触れながらグローバルな環境で働くことができます</p>
        </div>
      </article>
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <?php echo ku_image('images/whats_sm-03.jpg', 'キャリアアップの機会に関するイメージ'); ?>
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">成長し続けられるキャリア</h3>
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
                <?php echo ku_image('images/sm_schedule-01.jpg', '出勤時の様子'); ?>
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
                <?php echo ku_image('images/sm_schedule-02.jpg', '子どもたちを迎える様子'); ?>
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
                <?php echo ku_image('images/sm_schedule-03.jpg', 'アクティビティの様子'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>ダンスやエクササイズ、工作など、子どもたちが楽しみながら英語に触れられるアクティビティタイム。</p>
                <p>夢中で取り組む姿や、小さな成長の瞬間に気づけるのがこの仕事の大きなやりがいです。</p>
                <p>「今日こんなことができるようになったんだ！」という発見が毎日あります。</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-right">
            <p class="sm-schedule-item__time">18:30</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">生徒帰宅</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/sm_schedule-04.jpg', '生徒帰宅時の様子'); ?>
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
                <?php echo ku_image('images/sm_schedule-05.jpg', '退勤時の様子'); ?>
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
        'html' => "子どもたちの成長に寄り添い<br>笑顔を生み出す仕事に挑戦したい方",
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
            <?php echo ku_image($item['image'], $item['alt']); ?>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="sm-attractive-section" aria-labelledby="sm-attractive-title">
  <div class="ku-section__inner">
    <header class="sm-attractive-section__header">
      <div class="ku-section-heading ku-section-heading--image ku-section-heading--orange sm-attractive-heading">
        <img class="ku-section-heading__image" src="images/attractive.png" alt="Attractive">
        <p id="sm-attractive-title" class="ku-section-heading__subtitle">会社の魅力</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>
    <div class="sm-attractive-grid">
      <article class="sm-attractive-card">
        <div class="sm-attractive-card__tab"><span>POINT 01</span></div>
        <div class="sm-attractive-card__body">
          <div class="sm-attractive-card__icon">
            <img src="images/attractive_01.png" alt="" aria-hidden="true">
          </div>
          <p class="sm-attractive-card__stat" aria-label="年間休日124日以上">
            <span class="sm-attractive-card__label">年間休日</span>
            <span class="sm-attractive-card__value">124</span>
            <span class="sm-attractive-card__suffix">日以上</span>
          </p>
        </div>
      </article>
      <article class="sm-attractive-card sm-attractive-card--with-note">
        <div class="sm-attractive-card__tab"><span>POINT 02</span></div>
        <div class="sm-attractive-card__body">
          <div class="sm-attractive-card__icon">
            <img src="images/attractive_02.png" alt="" aria-hidden="true">
          </div>
          <p class="sm-attractive-card__stat" aria-label="平均残業時間 月9時間">
            <span class="sm-attractive-card__label">平均残業時間 月</span>
            <span class="sm-attractive-card__value">9</span>
            <span class="sm-attractive-card__suffix">時間</span>
          </p>
          <p class="sm-attractive-card__note">※2024年度実績</p>
        </div>
      </article>
      <article class="sm-attractive-card sm-attractive-card--with-note">
        <div class="sm-attractive-card__tab"><span>POINT 03</span></div>
        <div class="sm-attractive-card__body">
          <div class="sm-attractive-card__icon">
            <img src="images/attractive_03.png" alt="" aria-hidden="true">
          </div>
          <p class="sm-attractive-card__stat" aria-label="育休取得率100パーセント">
            <span class="sm-attractive-card__label">育休取得率</span>
            <span class="sm-attractive-card__value">100</span>
            <span class="sm-attractive-card__suffix">%</span>
          </p>
          <p class="sm-attractive-card__note">※2024年度実績</p>
          <p class="sm-attractive-card__note sm-attractive-card__note--shift-right">※男女ともに100%</p>
        </div>
      </article>
    </div>
  </div>
</section>
<section class="sm-job-desc-section" aria-labelledby="sm-job-desc-title">
  <div class="ku-section__inner">
    <header class="sm-job-desc-section__header">
      <div class="ku-section-heading ku-section-heading--image ku-section-heading--white sm-job-desc-heading">
        <img class="ku-section-heading__image" src="images/job_description.png" alt="Job Description">
        <p id="sm-job-desc-title" class="ku-section-heading__subtitle">募集要項</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>

    <dl class="sm-job-desc-table">
      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">職種</dt>
        <dd class="sm-job-desc-row__value">スクールマネージャー（正社員）</dd>
      </div>

      <div class="sm-job-desc-row sm-job-desc-row--salary">
        <dt class="sm-job-desc-row__label">給与</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text sm-job-desc-text--lead">■総合職(スクールマネージャー)</p>
          <p class="sm-job-desc-text">月給25.5万円～45万円＋賞与年2回＋交通費(当社<span class="only_mb_only" aria-hidden="true"></span>規定あり)＋各種手当＋昇給年1回</p>
          <p class="sm-job-desc-text sm-job-desc-text--lead">■一般職 (アシスタントスクールマネージャー)</p>
          <p class="sm-job-desc-text">月給22.6万円～28.5万円＋賞与年2回＋交通費 (当社規定あり)<span class="only_mb_only" aria-hidden="true"></span>＋各種手当＋昇給年1回</p>
          <p class="sm-job-desc-text sm-job-desc-text--em">◎その他、特別インセンティブやMVP制度もあります！<span class="only_mb_only" aria-hidden="true"></span></p>
          <p class="sm-job-desc-note">※経験やスキルを考慮の上、当社規定により優遇<span class="only_mb_only" aria-hidden="true"></span>いたします</p>
          <p class="sm-job-desc-note">※残業代は全額支給いたします</p>
          <p class="sm-job-desc-note">※試用期間中は賞与評価期間対象外となります</p>
        </dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">昇給・賞与</dt>
        <dd class="sm-job-desc-row__value">◎昇給／年1回　◎賞与／年2回　※評価に基づきます</dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">諸手当</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">交通費支給(社内規定有) / 残業手当(全額支給) /<span class="only_mb_only" aria-hidden="true"></span> リード手当</p>
          <p class="sm-job-desc-text">シーズナルスクールインセンティブ / 賞与年２回 /<span class="only_mb_only" aria-hidden="true"></span> 本部手当</p>
          <p class="sm-job-desc-text">職級手当 / 住宅手当 / 家族手当 / 役職手当 /<span class="only_mb_only" aria-hidden="true"></span> 管理職手当</p>
          <p class="sm-job-desc-text">育児手当（育休から復帰後、男女問わず毎月1万円を支給）</p>
          <p class="sm-job-desc-text">時短勤務補助手当（お子さまが発熱等で早退した際に月10時間まで<span class="only_mb_only" aria-hidden="true"></span>給与を補填）</p>
        </dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">勤務場所</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">勤務場所 全てのスクールが駅から徒歩圏内でアクセス良好！</p>
          <p class="sm-job-desc-text"><a class="sm-job-desc-link" href="https://kids-up.jp/school" target="_blank" rel="noopener noreferrer">https://kids-up.jp/school</a></p>
        </dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">勤務時間</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">11:00～20:00（実働8時間／休憩60分）</p>
          <p class="sm-job-desc-note">※イベントなどにより時間変動があります。<span class="only_mb_only" aria-hidden="true"></span>平均残業時間９時間（2024年度実績）</p>
        </dd>
      </div>

      <div class="sm-job-desc-row sm-job-desc-row--vacation">
        <dt class="sm-job-desc-row__label">休日・休暇</dt>
        <dd class="sm-job-desc-row__value">
          <div class="sm-job-desc-vacation">
            <section class="sm-job-desc-vacation__col" aria-label="休日">
              <p class="sm-job-desc-vacation__heading">【休日】</p>
              <p class="sm-job-desc-text">◎週休二日制　土日祝休み（原則）</p>
              <p class="sm-job-desc-text">イベントや説明会で土曜日に出勤する可能性が<span class="only_mb_only" aria-hidden="true"></span>ございます。その際は別日でお休みを取得いただきます。</p>
            </section>
            <section class="sm-job-desc-vacation__col" aria-label="休暇">
              <p class="sm-job-desc-vacation__heading">【休暇】</p>
              <ul class="sm-job-desc-vacation-list" aria-label="休暇一覧">
                <li class="sm-job-desc-vacation-list__item">年末年始休暇</li>
                <li class="sm-job-desc-vacation-list__item">夏季休暇</li>
                <li class="sm-job-desc-vacation-list__item">慶弔休暇</li>
                <li class="sm-job-desc-vacation-list__item">有給休暇</li>
                <li class="sm-job-desc-vacation-list__item">産前・産後休暇</li>
                <li class="sm-job-desc-vacation-list__item">育児休暇</li>
              </ul>
              <p class="sm-job-desc-text">男女ともに実績あり♪男性の取得率100％</p>
            </section>
          </div>
        </dd>
      </div>
    </dl>
  </div>
</section>
<section class="sm-benefits-section" aria-labelledby="sm-benefits-title">
  <div class="ku-section__inner">
    <header class="sm-benefits-section__header">
      <div class="ku-section-heading ku-section-heading--image ku-section-heading--orange sm-benefits-heading">
        <img class="ku-section-heading__image" src="images/benefits.png" alt="Benefits">
        <p id="sm-benefits-title" class="ku-section-heading__subtitle">福利厚生</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>
    <?php
    $sm_benefits_items = [
      [
        'icon' => 'images/benefits_03.png',
        'title' => '各種研修制度',
        'note_html' => '入社後研修、マネジメント研修など',
      ],
      [
        'icon' => 'images/benefits_01.png',
        'title' => '社会保険完備',
        'note_html' => '健康保険・厚生年金<br>雇用保険・労災保険',
      ],
      [
        'icon' => 'images/benefits_05.png',
        'title' => '授業料割引制度',
        'note_html' => 'お子さまがKids UPに通う場合に割引',
      ],
      [
        'icon' => 'images/benefits_04.png',
        'title' => '時短勤務補助手当',
        'note_html' => 'お子さまが発熱等で早退した際に月10時間まで給与を補填',
      ],
      [
        'icon' => 'images/benefits_09.png',
        'title' => '父母サポート制度',
        'note_html' => '育休から復帰後は男女問わず毎月1万円を支給。急に退勤する場合に月10時間まで給与を補填。',
      ],
      [
        'icon' => 'images/benefits_08.png',
        'title' => '保養所施設',
        'note_html' => 'ハワイ、タイ、沖縄、その他',
      ],
      [
        'icon' => 'images/benefits_06.png',
        'title' => '定期健康診断',
      ],
      [
        'icon' => 'images/benefits_07.png',
        'title' => 'MVP制度',
      ],
      [
        'icon' => 'images/benefits_02.png',
        'title' => '退職金制度',
      ],
    ];
    ?>
    <div class="sm-benefits-list" role="list">
      <?php foreach ($sm_benefits_items as $item): ?>
        <article class="sm-benefits-item" role="listitem">
          <div class="sm-benefits-item__ring" aria-hidden="true">
            <img class="sm-benefits-item__icon" src="<?php echo htmlspecialchars($item['icon'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
          </div>
          <h3 class="sm-benefits-item__title"><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
          <?php if (!empty($item['note_html'])): ?>
            <p class="sm-benefits-item__note"><?php echo $item['note_html']; ?></p>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="sm-career-section" aria-labelledby="sm-career-title">
  <div class="ku-section__inner">
    <header class="sm-career-section__header">
      <div class="ku-section-heading ku-section-heading--image ku-section-heading--white sm-career-heading">
        <img class="ku-section-heading__image" src="images/career_s.png" alt="Career step">
        <p id="sm-career-title" class="ku-section-heading__subtitle">キャリアステップ</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>

    <div class="sm-career-panel">
      <img class="sm-career-panel__image sm-career-panel__image--desktop" src="images/career_step.png" alt="キャリアステップの図">
      <img class="sm-career-panel__image sm-career-panel__image--mobile" src="images/career_step_mob.png" alt="キャリアステップの図">
    </div>
  </div>
</section>
<section class="sm-interview-section" aria-labelledby="sm-interview-title">
  <div class="ku-section__inner">
    <header class="sm-interview-section__header">
      <div class="ku-section-heading ku-section-heading--image ku-section-heading--orange sm-interview-heading">
        <img class="ku-section-heading__image" src="images/Interview_orange.png" alt="Interview">
        <p id="sm-interview-title" class="ku-section-heading__subtitle">社員インタビュー</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>

    <div class="sm-interview-feature">
      <div class="sm-interview-feature__copy">
        <h3 class="sm-interview-feature__lead">グローバルな環境で子どもやチームだけでなく<br>自分自身も大きく成長できる環境！</h3>
        <div class="sm-interview-feature__meta">
          <span class="sm-interview-feature__meta-line" aria-hidden="true"></span>
          <p class="sm-interview-feature__meta-text">スクールマネージャー<br>2021年入社</p>
        </div>
      </div>
      <div class="sm-interview-feature__media">
        <?php echo ku_image('images/interview_01.jpg', 'スクールで子どもたちと関わるスタッフの様子'); ?>
      </div>
    </div>

    <?php
    $sm_interview_slides = [
      [
        'title' => '入社を決めた理由',
        'text' => '教育業界未経験でしたが、KidsUPは「英語 × 教育 」という環境で未経験でも成長できる環境だと感じました。面接で話を聞く中で、現場の裁量が大きく、自分のアイデアでスクールをより良くできる点に大きな魅力を感じました。また、国籍やバックグラウンドの異なるスタッフと一緒に働ける環境にも惹かれ、「ここなら新しい挑戦ができる」と確信して入社を決めました。',
      ],
      [
        'title' => '仕事の難しさ・やりがい',
        'text' => 'スクールマネージャーの仕事は、ただ運営をするだけではなく、子ども・保護者・スタッフの三方向と向き合い、信頼関係を築くことが求められます。時にはトラブル対応や調整が必要な場面もあり、簡単な仕事ではありません。しかし、その分やりがいも大きく、スタッフが自信を持ってレッスンに臨めるようになった時や、子どもたちが「英語が好きになった！」と言ってくれた時、そして保護者の方から感謝の言葉をいただいた時に、心からこの仕事を選んで良かったと思えます。チームみんなでスクールを作り上げていく感覚は、他では味わえない魅力です。',
      ],
      [
        'title' => 'これから挑戦したいこと',
        'text' => 'まずは今のスクールを、地域で一番愛されるスクールにすることが目標です。そのために、子どもたちがより楽しく通ってくれるような創意工夫や、スタッフの強みを活かしたチームマネジメントなど、現場発信の仕組みをもっと増やしていきたいと考えています。<br>将来的には、エリアマネージャーにも挑戦し、より広範囲のスクールで生徒の英語力向上に貢献したいです。KidsUPは年齢や性別に関係なくキャリアアップのチャンスがあるので、自分の可能性を広げたい人には最高の環境だと思います。',
      ],
    ];
    ?>
    <div class="sm-interview-slider-wrap">
      <div class="sm-interview-swiper js-sm-interview-swiper">
        <?php foreach ($sm_interview_slides as $slide): ?>
          <div class="sm-interview-slide">
            <article class="sm-interview-slide__inner">
              <h4 class="sm-interview-slide__title"><?php echo htmlspecialchars($slide['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
              <p class="sm-interview-slide__text"><?php echo $slide['text']; ?></p>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<section class="sm-flow-section" aria-labelledby="sm-flow-title">
  <div class="ku-section__inner">
    <header class="sm-flow-section__header">
      <div class="ku-section-heading ku-section-heading--image ku-section-heading--white sm-flow-heading">
        <img class="ku-section-heading__image" src="images/flow.png" alt="Flow">
        <p id="sm-flow-title" class="ku-section-heading__subtitle">選考フロー</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>

    <?php
    $sm_flow_steps = [
      [
        'num' => '01',
        'title' => '応募',
        'icon' => 'images/flow_01.png',
        'text_html' => 'まずは「応募はこちら」よりお気軽にご応募ください。<br>KidsUPのホームページからの応募をお待ちしております。',
      ],
      [
        'num' => '02',
        'title' => '書類選考',
        'icon' => 'images/flow_02.png',
        'text_html' => '書類のアップロードフォームをご案内いたしますので、<br>履歴書、職務経歴書をアップロードください。',
      ],
      [
        'num' => '03',
        'title' => '一次面接(オンライン)',
        'icon' => 'images/flow_03.png',
        'text_html' => 'オンラインで面接可能です。<br>面接で聞きたいことを準備してきてください。',
      ],
      [
        'num' => '04',
        'title' => '最終面接(対面)',
        'icon' => 'images/flow_04.png',
        'text_html' => '原則対面ですが、オンラインでも対応可能です。<br>自分の思いをぶつけてください。',
      ],
      [
        'num' => '05',
        'title' => '合否のご連絡',
        'icon' => 'images/flow_05.png',
        'text_html' => '面接後1週間以内にご連絡いたします。<br>応募から合格まで最短2週間程度で可能です。',
      ],
    ];
    ?>
    <div class="sm-flow-card">
      <ol class="sm-flow-list">
        <?php foreach ($sm_flow_steps as $index => $step): ?>
          <li class="sm-flow-step <?php echo $index === count($sm_flow_steps) - 1 ? 'is-last' : ''; ?>">
            <span class="sm-flow-step__num" aria-hidden="true"><?php echo htmlspecialchars($step['num'], ENT_QUOTES, 'UTF-8'); ?></span>
            <div class="sm-flow-step__body">
              <h3 class="sm-flow-step__title"><?php echo htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
              <p class="sm-flow-step__text"><?php echo $step['text_html']; ?></p>
            </div>
            <div class="sm-flow-step__icon">
              <img src="<?php echo htmlspecialchars($step['icon'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
            </div>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>
<section class="sm-faq-section" aria-labelledby="sm-faq-title">
  <div class="ku-section__inner">
    <header class="sm-faq-section__header">
      <div class="ku-section-heading ku-section-heading--image ku-section-heading--orange sm-faq-heading">
        <img class="ku-section-heading__image" src="images/q&amp;a.png" alt="Q&A">
        <p id="sm-faq-title" class="ku-section-heading__subtitle">よくある質問</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>

    <?php
    $sm_faq_items = [
      [
        'q' => '英語が得意でなくても応募できますか？',
        'a_html' => 'はい、応募可能です。<br>英語力よりも「成長意欲」を重視しています。<br>入社後は日々の業務を通して英語力を伸ばせる環境があります',
      ],
      [
        'q' => '未経験でも大丈夫ですか？',
        'a_html' => '多くのスタッフが未経験からスタートしています。<br>教育業界が初めての方でも、入社時研修・OJT・定期的なフォローを通して、安心して業務を習得できる体制があります。',
      ],
      [
        'q' => 'どのような研修制度がありますか？',
        'a_html' => '入社時研修、OJT、定期研修を用意しています。<br>KidsUPの教育方針や安全管理、子どもとの関わり方、事務業務などを基礎から学べます。経験や成長段階に応じた研修も行っています。',
      ],
      [
        'q' => 'どのような雰囲気の職場ですか？',
        'a_html' => '明るく、チームワークを大切にする職場です。<br>年齢や国籍に関わらず意見を出し合える環境で、子どもたちの成長をチーム全体で支えています。',
      ],
      [
        'q' => 'キャリアアップの制度はありますか？',
        'a_html' => 'はい、あります。<br>スクールマネージャーからエリアマネージャー、経営戦略、留学プロジェクト等へのキャリアアップ実績があります。<br>本人の希望や適性を踏まえて、成長をサポートします。',
      ],
    ];
    ?>
    <div class="sm-faq-list" role="list">
      <?php foreach ($sm_faq_items as $index => $faq_item): ?>
        <?php
        $is_open = false;
        $faq_panel_id = 'sm-faq-panel-' . ($index + 1);
        ?>
        <article class="sm-faq-item js-sm-faq-item <?php echo $is_open ? 'is-open' : ''; ?>" role="listitem">
          <h3 class="sm-faq-item__title">
            <button
              class="sm-faq-item__button js-sm-faq-toggle"
              type="button"
              aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
              aria-controls="<?php echo htmlspecialchars($faq_panel_id, ENT_QUOTES, 'UTF-8'); ?>"
            >
              <span class="sm-faq-item__mark sm-faq-item__mark--q" aria-hidden="true">Q</span>
              <span class="sm-faq-item__question"><?php echo htmlspecialchars($faq_item['q'], ENT_QUOTES, 'UTF-8'); ?></span>
              <span class="sm-faq-item__toggle" aria-hidden="true"></span>
            </button>
          </h3>
          <div
            id="<?php echo htmlspecialchars($faq_panel_id, ENT_QUOTES, 'UTF-8'); ?>"
            class="sm-faq-item__panel js-sm-faq-panel"
            <?php echo $is_open ? '' : ' hidden'; ?>
          >
            <div class="sm-faq-item__answer">
              <span class="sm-faq-item__mark sm-faq-item__mark--a" aria-hidden="true">A</span>
              <p class="sm-faq-item__answer-text"><?php echo $faq_item['a_html']; ?></p>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <div class="sm-faq-section__cta">
      <a class="sm-faq-section__apply" href="<?php echo esc_url($apply_cta_href ?? 'apply.php'); ?>">応募はこちら</a>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
