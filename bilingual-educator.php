<?php
$page_title = 'Kids Up Recruit | Bilingual Educator';
$body_class = 'page-school-manager page-bilingual-educator';
$page_top_title_line1 = 'バイリンガルティーチャー';
$page_top_title_line2 = "グローバルな環境で自身の英語力を活かしながら、\n子どもたちの成長に大きく貢献できます";
$page_top_image = 'images/top-bilingual.jpg';
$page_top_image_mob = 'images/top-bilingual-mob.jpg';
$page_top_alt = 'バイリンガルティーチャー';
include __DIR__ . '/includes/header.php';
?>
<?php include __DIR__ . '/includes/page-top.php'; ?>
<section class="sm-about-section" aria-labelledby="sm-about-title">
  <div class="ku-section__inner">
    <header class="sm-about-section__header">
      <h2 id="sm-about-title" class="sm-about-section__title">バイリンガルティーチャーとは？</h2>
    </header>
    <div class="sm-about-grid">
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <?php echo ku_image('images/whats_bilingual-01.jpg', '子どもとスタッフの様子'); ?>
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">子どもたちの「できた！」を一緒に喜べるやりがい</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">日々のレッスンで子どもたちの成長や英語の理解が目に見える形で実感できます。小さな成功体験を一緒に積み重ねる喜びが大きなやりがいです。</p>
        </div>
      </article>
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <?php echo ku_image('images/whats_bilingual-02.jpg', 'グローバルな環境で働くスタッフの様子'); ?>
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">英語力を活かしてグローバルな教育現場で活躍できる</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">英語ネイティブのスタッフなど、多様な価値観に触れることができます。語学力を最大限に活かせる環境です。</p>
        </div>
      </article>
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <?php echo ku_image('images/whats_bilingual-03.jpg', 'キャリアアップの機会に関するイメージ'); ?>
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">教育スキルとキャリアを同時に伸ばせる環境</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">カリキュラムやクラス運営にも挑戦できるため、教育者としてのスキルアップはもちろん、スクールマネージャーや本部スタッフなどへのキャリアパスも広がります。</p>
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
                <?php echo ku_image('images/native-schedule_01.jpg', '出勤時の様子'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>朝のミーティングを英語で行い、1日のスタートから英語に囲まれた環境です。子どもたちが来る前に、生徒の様子を共有したり、レッスン準備をしたりと、チームで協力しながら楽しく準備を進めます。</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-right">
            <p class="sm-schedule-item__time">13:00</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">お迎え時間</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/schedule_02.jpg', '子どもたちを迎える様子'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>子どもたちをお迎えする時間です。「今日は何をするのかな？」とワクワクしながら登園してくる子どもたち。工作？ゲーム？それとも別の楽しいアクティビティ？期待いっぱいの時間の始まりです。</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-left">
            <p class="sm-schedule-item__time">16:00</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">Daily Activity</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/schedule_03.jpg', 'アクティビティの様子'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>運動や工作、簡単なサイエンス実験など、日によってさまざまな活動を行います。子どもたちは遊びを楽しみながら、自然と英語に触れ、学んでいきます。毎日の活動を通して、「楽しい！」という気持ちを大切にしながら、一緒に過ごします。</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-right">
            <p class="sm-schedule-item__time">17:15</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">イングリッシュクラス</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/schedule_04.jpg', 'イングリッシュクラスの様子'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>リーディング・ライティング・スピーキング・リスニングの4技能をバランスよく伸ばすレッスンを行います。テキストを使用し、実用的な文法やコミュニケーション表現を指導します。明確なステップのあるカリキュラムにより、楽しい参加型の授業を実施します。</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-left">
            <p class="sm-schedule-item__time">18:30</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">生徒帰宅</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/schedule_05.jpg', '生徒帰宅時の様子'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>保護者のお迎えや帰りの送迎バスが出発。</p>
                <p>お迎えに来た保護者には、お子さまの様子を丁寧にフィードバックします。</p>
                <p>その後は翌日の準備や教室のクリーニングを行い、明日のレッスンに備えます。</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-right">
            <p class="sm-schedule-item__time">20:00</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">退勤</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/schedule_05.jpg', '退勤時の様子'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>平均残業は月3時間とほぼなし。持ち帰り仕事もないため、仕事後はしっかりリフレッシュできます。</p>
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
        'html' => "英語力を活かして自分自身も<br>スキルアップしていきたい方",
      ],
      [
        'num' => '03',
        'image' => 'images/hr_03.jpg',
        'alt' => '教室で活動する子どもとスタッフの様子',
        'html' => "チームで協力しながら、子どもたちの<br>成長に主体的に取り組める方",
      ],
      [
        'num' => '04',
        'image' => 'images/hr_04.jpg',
        'alt' => 'スタッフ集合写真',
        'html' => "子どもと関わることが好きで、<br>一人ひとりに向き合った<br>丁寧な対応ができる方",
      ],
      [
        'num' => '05',
        'image' => 'images/hr_05.jpg',
        'alt' => '子どもとスタッフの学びの様子',
        'html' => "教育や保育、英語教育に興味があり、<br>長期的にキャリアを築いていきたい方",
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
          <p class="sm-attractive-card__stat" aria-label="平均残業時間 月3時間">
            <span class="sm-attractive-card__label">平均残業時間 月</span>
            <span class="sm-attractive-card__value">3</span>
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
        <dd class="sm-job-desc-row__value">バイリンガルエデュケーター(正社員)</dd>
      </div>

      <div class="sm-job-desc-row sm-job-desc-row--salary">
        <dt class="sm-job-desc-row__label">給与</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">月給263,667円～356,000円＋諸手当＋交通費＋インセンティブ制度・決算賞与制度あり</p>
          <p class="sm-job-desc-note">-試用期間は３カ月間です。</p>
          <p class="sm-job-desc-note">-中途採用の場合、試用期間中は契約社員となります。</p>
          <p class="sm-job-desc-note">-中途採用は試用期間中、月給22万円～となります。</p>
          <p class="sm-job-desc-note">-新卒採用は4月のみ月給22万円となります。</p>
          <p class="sm-job-desc-note">-経験やスキルを考慮の上、当社規定により優遇いたします。</p>
          <p class="sm-job-desc-note">-残業代は全額支給いたします。</p>
        </dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">昇給・賞与</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">◎昇給／年1回</p>
          <p class="sm-job-desc-text">◎決算賞与／年1回</p>
          <p class="sm-job-desc-note">※評価に基づきます</p>
        </dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">諸手当</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">交通費（社内規定あり）</p>
          <p class="sm-job-desc-text">残業手当（全額）</p>
          <p class="sm-job-desc-text">シーズナルスクールインセンティブ</p>
          <p class="sm-job-desc-text">本部手当</p>
          <p class="sm-job-desc-text">職級手当</p>
          <p class="sm-job-desc-text">役職手当</p>
          <p class="sm-job-desc-text">資格手当</p>
          <p class="sm-job-desc-text">リーダー手当</p>
          <p class="sm-job-desc-text">父母サポート手当（育休復帰後に毎月1万円を支給）</p>
          <p class="sm-job-desc-text">時短勤務補助手当（お子さまが発熱等で早退した際に月10時間まで給与を補填）</p>
          <p class="sm-job-desc-text">決算賞与</p>
          <p class="sm-job-desc-note">※総合職に昇格後は下記がプラスとなります。</p>
          <p class="sm-job-desc-text">家族手当</p>
          <p class="sm-job-desc-text">住宅手当</p>
        </dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">勤務場所</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">全てのスクールが駅から徒歩圏内でアクセス良好！</p>
          <p class="sm-job-desc-text"><a class="sm-job-desc-link" href="https://kids-up.jp/school" target="_blank" rel="noopener noreferrer">https://kids-up.jp/school</a></p>
        </dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">勤務時間</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">11:00～20:00（実働8時間／休憩60分）</p>
          <p class="sm-job-desc-note">※イベントなどにより時間変動があります。</p>
          <p class="sm-job-desc-note">※平均残業時間3時間以下でワークライフバランスバッチリ◎</p>
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
      <img class="sm-career-panel__image sm-career-panel__image--desktop" src="images/teacher_career_step.png" alt="キャリアステップの図">
      <img class="sm-career-panel__image sm-career-panel__image--mobile" src="images/teacher_career_step_mob.png" alt="キャリアステップの図">
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
        <h3 class="sm-interview-feature__lead">グローバルな環境の中で英語を日常的に使いながら、自分自身も成長し続けられる点が魅力です！</h3>
        <div class="sm-interview-feature__meta">
          <span class="sm-interview-feature__meta-line" aria-hidden="true"></span>
          <p class="sm-interview-feature__meta-text">バイリンガルティーチャー<br>2023年入社</p>
        </div>
      </div>
      <div class="sm-interview-feature__media">
        <?php echo ku_image('images/bilingual_teacher_interview-01.jpg', 'スクールで子どもたちと関わるスタッフの様子'); ?>
      </div>
    </div>

    <?php
    $sm_interview_slides = [
      [
        'title' => '入社を決めた理由',
        'text' => '留学で身につけた英語力を活かせる仕事を探していた中で、英語環境で子どもと関われる点に魅力を感じました。<br>英語教育は未経験でしたが、研修制度が整っていると知り、安心して挑戦できると思ったことが決め手です。',
      ],
      [
        'title' => '仕事の難しさ・やりがい',
        'text' => '最初は英語で子どもたちに分かりやすく伝えることや、年齢に合わせたサポートの仕方に難しさを感じました。<br>しかし、関わりを重ねる中で子どもたちが少しずつ英語に自信を持ち、成長していく姿を見るたびに大きなやりがいを感じます。<br>子ども一人ひとりの成長に寄り添いながら、自分自身のコミュニケーション力や指導力も伸ばせる仕事だと思います。',
      ],
      [
        'title' => 'これから挑戦したいこと',
        'text' => '今後は指導スキルや現場での対応力を高め、後輩スタッフのサポートもできる存在を目指しています。<br>将来的にはOJTトレーナーとして、新しく入社するスタッフを支えながら、より良いスクール運営と教育の質向上に貢献していきたいと考えています。',
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
        'title' => '面接(オンライン)',
        'icon' => 'images/flow_03.png',
        'text_html' => 'オンラインで面接可能です。<br>面接で聞きたいことを準備してきてください。',
      ],
      [
        'num' => '04',
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
        'q' => '英語教育の経験がなくても応募できますか？',
        'a_html' => 'はい、英語教育が未経験の方でもご応募いただけます。<br>入社後は研修やOJTを通して、子どもへの関わり方や指導方法を一から学べる環境を整えています。',
      ],
      [
        'q' => '英語はどのくらいのレベルが必要ですか？',
        'a_html' => '専門的な英語スキルは不要ですが、日常的なコミュニケーションを英語で行えるレベルが必要です。<br>ネイティブスタッフとのコミュニケーションや、子どもたちとの英語でのやり取りが中心となります。',
      ],
      [
        'q' => '英語力を維持・向上させることはできますか？',
        'a_html' => '日常的に英語を使う環境のため、自然と英語力を維持・向上させることができます。<br>ネイティブスタッフとの連携や実務を通して、実践的な英語力を身につけることが可能です。',
      ],
      [
        'q' => '面接ではどのようなことを聞かれますか？',
        'a_html' => 'これまでのご経験や志望理由、子どもと関わることへの想いなどを中心にお伺いします。<br>面接はお互いの理解を深めるための場でもありますので、リラックスしてご参加ください。',
      ],
      [
        'q' => '英語での面接はありますか？',
        'a_html' => '面接は基本的に日本語で行いますが、英語での自己紹介をお願いする場合があります。<br>高度な英語力を評価するものではなく、日常会話レベルのコミュニケーションができるかを確認する目的です。',
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
