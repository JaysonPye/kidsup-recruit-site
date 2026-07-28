<?php
$page_title = 'Kids Up Recruit | Native Teacher';
$body_class = 'page-school-manager page-native-educator';
$page_top_title_line1 = 'Native Teacher';
$page_top_title_line2 = "Inspiring children’s futures through engaging and authentic English education";
$page_top_image = 'images/top-native.jpg';
$page_top_image_mob = 'images/top-native-mob.jpg';
$page_top_alt = 'Native Teacher';
include __DIR__ . '/includes/header.php';
?>
<?php include __DIR__ . '/includes/page-top.php'; ?>
<section class="sm-about-section" aria-labelledby="sm-about-title">
  <div class="ku-section__inner">
    <header class="sm-about-section__header">
      <h2 id="sm-about-title" class="sm-about-section__title">The Role of a Native English Teacher</h2>
    </header>
    <div class="sm-about-grid">
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <?php echo ku_image('images/whats_native-01.jpg', '子どもとスタッフの様子'); ?>
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">A rewarding role where you can celebrate each child’s “I did it!” moments</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">Through daily lessons, you can clearly see children’s growth and their increasing understanding of English. Sharing their small successes and progress brings a deep sense of fulfillment.</p>
        </div>
      </article>
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <?php echo ku_image('images/whats_native-02.jpg', 'グローバルな環境で働くスタッフの様子'); ?>
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">Work in a truly global educational environment</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">Join a diverse team of bilingual educators and international staff while sharing language, culture, and ideas with the children every day.</p>
        </div>
      </article>
      <article class="sm-about-card">
        <div class="sm-about-card__media">
          <?php echo ku_image('images/whats_native-03.jpg', 'キャリアアップの機会に関するイメージ'); ?>
        </div>
        <div class="sm-about-card__body">
          <h3 class="sm-about-card__title">A setting where you can grow your teaching skills and career</h3>
          <span class="sm-about-card__divider" aria-hidden="true"></span>
          <p class="sm-about-card__text">You can develop as an educator through lesson delivery and curriculum involvement, with future career paths in the Training Team or Curriculum Team, as well as opportunities to become a 正社員 seishain (full-time, non contracted).</p>
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
            <h3 class="sm-schedule-item__heading">Start of the Day</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/native-schedule_01.jpg', 'Start of the day'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>The day begins with a team meeting where teachers connect, share student updates, and prepare for lessons together. Before the children arrive, we collaborate as a team to create a fun and engaging learning experience for the day.</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-right">
            <p class="sm-schedule-item__time">13:00</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">Pick-up Time</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/schedule_02.jpg', 'Pick-up time'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>It’s time to welcome the children as they arrive full of excitement and curiosity. “What are we doing today?” they ask with bright smiles. Whether it’s crafts, games, or special activities, this is when the fun and energy of the day truly begin.</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-left">
            <p class="sm-schedule-item__time">16:00</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">Daily Activity</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/native-schedule_03.jpg', 'Daily activity'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>Each day includes a variety of activities such as exercise, arts and crafts, and simple science experiments. Through play-based learning, children naturally experience authentic English while enjoying hands-on activities in a lively and supportive environment.</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-right">
            <p class="sm-schedule-item__time">17:15</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">English Class</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/native-schedule_04.jpg', 'English class'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>Teachers lead structured, interactive lessons that develop the four core skills: reading, writing, speaking, and listening. Using curriculum materials and engaging activities, you help children build practical communication skills in a fun and meaningful way.</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-left">
            <p class="sm-schedule-item__time">18:15</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">Advanced Class Begins</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/native-schedule_05.jpg', 'Advanced class begins'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>For more proficient students, teachers provide focused lessons to further develop their language abilities. With smaller class sizes, you can give more individualized attention and support each child’s progress.</p>
              </div>
            </div>
          </article>
          <article class="sm-schedule-item sm-schedule-item--image-right">
            <p class="sm-schedule-item__time">20:00</p>
            <span class="sm-schedule-item__time-divider" aria-hidden="true"></span>
            <h3 class="sm-schedule-item__heading">End of the Day</h3>
            <div class="sm-schedule-item__content">
              <div class="sm-schedule-item__media">
                <?php echo ku_image('images/native-schedule_06.jpg', 'End of the day'); ?>
              </div>
              <div class="sm-schedule-item__text">
                <p>Overtime is minimal (around three hours per month on average), and there is no take-home work. This allows teachers to maintain a healthy work-life balance and fully recharge after the day.</p>
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
        'html' => "Those who want to make a difference in children’s lives and inspire their growth",
      ],
      [
        'num' => '02',
        'image' => 'images/hr_02.jpg',
        'alt' => '屋外で活動する子どもたちとスタッフの様子',
        'html' => "Those who are passionate about sharing their language and culture through education",
      ],
      [
        'num' => '03',
        'image' => 'images/hr_03.jpg',
        'alt' => '教室で活動する子どもとスタッフの様子',
        'html' => "Those who can collaborate as part of a team and take initiative in supporting children’s development",
      ],
      [
        'num' => '04',
        'image' => 'images/native-hr_04.jpg',
        'alt' => 'スタッフ集合写真',
        'html' => "Those who genuinely enjoy working with children and can give thoughtful, individualized attention",
      ],
      [
        'num' => '05',
        'image' => 'images/native-hr_05.jpg',
        'alt' => '子どもとスタッフの学びの様子',
        'html' => "Those who are interested in building a long-term career in education",
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
          <p class="sm-attractive-card__stat" aria-label="Over 124 days off per year">
            <span class="sm-attractive-card__label">Over</span>
            <span class="sm-attractive-card__value">124</span>
            <span class="sm-attractive-card__suffix">days off per year</span>
          </p>
        </div>
      </article>
      <article class="sm-attractive-card sm-attractive-card--with-note">
        <div class="sm-attractive-card__tab"><span>POINT 02</span></div>
        <div class="sm-attractive-card__body">
          <div class="sm-attractive-card__icon">
            <img src="images/attractive_02.png" alt="" aria-hidden="true">
          </div>
          <p class="sm-attractive-card__stat" aria-label="Average monthly overtime: 3 hours">
            <span class="sm-attractive-card__label">Average monthly overtime:</span>
            <span class="sm-attractive-card__value">3</span>
            <span class="sm-attractive-card__suffix">hours</span>
          </p>
          <p class="sm-attractive-card__note">FY2024 result</p>
        </div>
      </article>
      <article class="sm-attractive-card sm-attractive-card--with-note">
        <div class="sm-attractive-card__tab"><span>POINT 03</span></div>
        <div class="sm-attractive-card__body">
          <div class="sm-attractive-card__icon">
            <img src="images/attractive_03.png" alt="" aria-hidden="true">
          </div>
          <p class="sm-attractive-card__stat" aria-label="Childcare leave utilization rate: 100%">
            <span class="sm-attractive-card__label">Childcare leave utilization rate:</span>
            <span class="sm-attractive-card__value">100</span>
            <span class="sm-attractive-card__suffix">%</span>
          </p>
          <p class="sm-attractive-card__note">FY2024 result</p>
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
        <dt class="sm-job-desc-row__label">Occupation</dt>
        <dd class="sm-job-desc-row__value">Native English Teacher</dd>
      </div>

      <div class="sm-job-desc-row sm-job-desc-row--salary">
        <dt class="sm-job-desc-row__label">Salary</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">267,000yen~</p>
        </dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">Compensation</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">◎ Transportation reimbursement</p>
          <p class="sm-job-desc-text">◎ Visa sponsorship and renewal support</p>
          <p class="sm-job-desc-text">◎ Overtime allowance is paid additionally</p>
          <p class="sm-job-desc-text">◎ Yearly raise increase</p>
          <p class="sm-job-desc-note">※Regular rate increase</p>
          <p class="sm-job-desc-text">◎ Renewal bonus of ￥100,000～￥200,000</p>
          <p class="sm-job-desc-text">◎ Paid days off</p>
          <p class="sm-job-desc-text">◎ Additional paid days off every year</p>
          <p class="sm-job-desc-text">◎ All National Holidays off</p>
          <p class="sm-job-desc-text">◎ Fully paid initial training</p>
          <p class="sm-job-desc-text">◎ Social security and Health insurance provided</p>
          <p class="sm-job-desc-text">◎ Regular health check</p>
        </dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">Location</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">◎ Tokyo</p>
          <p class="sm-job-desc-text">◎ Kanagawa</p>
          <p class="sm-job-desc-text">◎ Chiba</p>
          <p class="sm-job-desc-text">◎ Saitama</p>
          <p class="sm-job-desc-text"><a class="sm-job-desc-link" href="https://kids-up.jp/school" target="_blank" rel="noopener noreferrer">https://kids-up.jp/school</a></p>
        </dd>
      </div>

      <div class="sm-job-desc-row">
        <dt class="sm-job-desc-row__label">Working Hours</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">11:00-20:00 (8 working hours / 60-minute break)</p>
          <p class="sm-job-desc-note">*Hours may vary depending on events.</p>
          <p class="sm-job-desc-note">*Average overtime is under 3 hours, ensuring an excellent work-life balance.</p>
        </dd>
      </div>

      <div class="sm-job-desc-row sm-job-desc-row--career">
        <dt class="sm-job-desc-row__label">Career Path</dt>
        <dd class="sm-job-desc-row__value">
          <p class="sm-job-desc-text">Our mentorship program is available for teachers who have interest in curriculum development, management positions, digital marketing, design and IT.</p>
          <p class="sm-job-desc-text">Kids UP appreciates the hard work of our teachers and offers 正社員 seishain (full-time, non contracted) positions to those wishing to pursue a mid-to-long term career in Japan.</p>
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
        <p id="sm-benefits-title" class="ku-section-heading__subtitle">Benefits</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>
    <?php
    $sm_benefits_items = [
      [
        'icon' => 'images/benefits_03.png',
        'title' => 'Training Programs',
        'note_html' => 'Various training programs including onboarding training and management training',
      ],
      [
        'icon' => 'images/benefits_01.png',
        'title' => 'Social Insurance Coverage',
        'note_html' => 'Health insurance, pension, employment insurance, and workers&#39; compensation',
      ],
      [
        'icon' => 'images/benefits_05.png',
        'title' => 'Tuition Discount Program',
        'note_html' => 'Discounts available when enrolling your child in KidsUP',
      ],
      [
        'icon' => 'images/benefits_04.png',
        'title' => 'Flexible Working Support Allowance',
        'note_html' => 'Salary guaranteed for up to 10 hours per month for flexible working arrangements when needed due to child-related circumstances',
      ],
      [
        'icon' => 'images/benefits_09.png',
        'title' => 'Parental Support Program',
        'note_html' => 'Up to 1 month of paid leave per year for childcare-related reasons<br>Up to 10 hours of paid leave per month available for urgent needs',
      ],
      [
        'icon' => 'images/benefits_08.png',
        'title' => 'Company Retreat Facilities',
        'note_html' => 'Available in Hawaii, Thailand, Okinawa, and other locations',
      ],
      [
        'icon' => 'images/benefits_06.png',
        'title' => 'Annual Health Checkups',
      ],
      [
        'icon' => 'images/benefits_07.png',
        'title' => 'MVP Award Program',
      ],
      [
        'icon' => 'images/benefits_02.png',
        'title' => 'Retirement Benefit System',
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
      <img class="sm-career-panel__image sm-career-panel__image--desktop" src="images/native_career_step.png" alt="キャリアステップの図">
      <img class="sm-career-panel__image sm-career-panel__image--mobile" src="images/native_career_step_mob.png" alt="キャリアステップの図">
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
        <h3 class="sm-interview-feature__lead">Grow as a professional educator while shaping our students' future.</h3>
        <div class="sm-interview-feature__meta">
          <span class="sm-interview-feature__meta-line" aria-hidden="true"></span>
          <p class="sm-interview-feature__meta-text">Native Teacher<br>Joined in 2023</p>
        </div>
      </div>
      <div class="sm-interview-feature__media">
        <?php echo ku_image('images/teacher_interview_01.jpg', 'スクールで子どもたちと関わるスタッフの様子'); ?>
      </div>
    </div>

    <?php
    $sm_interview_slides = [
      [
        'title' => 'Why did you decide to join KidsUP?',
        'text' => 'After gaining three years of teaching experience, I was looking for a role where I could be more actively involved in children&#39;s development rather than just delivering preset lessons.<br>What stood out about KidsUP was the focus on immersive learning and the opportunity to manage classes, support different age groups, and contribute to a child&#39;s overall growth.<br>I was also drawn to the structured training and collaborative environment, which allows teachers to continuously refine their teaching approach and classroom management skills.',
      ],
      [
        'title' => 'Challenges and Rewards of the Job',
        'text' => 'One of the challenges is adapting teaching methods to different age groups and individual personalities.<br>Each child learns differently, so it requires observation, flexibility, and strong classroom management skills.<br>However, this is also what makes the job highly rewarding.<br>Seeing children become more independent, confident, and engaged in learning over time gives me a strong sense of purpose as an educator.<br>Compared to my previous roles, I feel that I am developing more practical teaching skills, including lesson facilitation, behavior management, and student engagement strategies.',
      ],
      [
        'title' => 'Any new goals that you would like to work towards to?',
        'text' => 'Going forward, I would like to further refine my teaching strategies and take on a mentoring role for newer teachers.<br>I am particularly interested in becoming an OJT trainer and contributing to teacher development and program quality.<br>In the long term, I hope to be involved not only in teaching but also in curriculum improvement and educational program development.',
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
        <p id="sm-flow-title" class="ku-section-heading__subtitle">Flow</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>

    <?php
    $sm_flow_steps = [
      [
        'num' => '01',
        'title' => 'Application',
        'icon' => 'images/flow_01.png',
        'text_html' => 'Please apply by clicking the “Apply” button.<br>We look forward to receiving your application through the KidsUP website.',
      ],
      [
        'num' => '02',
        'title' => 'Document Screening',
        'icon' => 'images/flow_02.png',
        'text_html' => 'You will be guided to the document upload form via email.<br>Please upload your resume and CV.',
      ],
      [
        'num' => '03',
        'title' => 'Interview (Online)',
        'icon' => 'images/flow_03.png',
        'text_html' => 'Interviews will be conducted online.<br>Please feel free to prepare any questions you would like to ask during the interview.',
      ],
      [
        'num' => '04',
        'title' => 'Result Notification',
        'icon' => 'images/flow_05.png',
        'text_html' => 'We will notify you of the result within approximately one week after the interview.<br>The entire process from application to offer can be completed in as little as two weeks.',
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
        <p id="sm-faq-title" class="ku-section-heading__subtitle">Q&amp;A</p>
        <span class="ku-section-heading__line" aria-hidden="true"></span>
      </div>
    </header>

    <?php
    $sm_faq_items = [
      [
        'q' => 'Can I apply even if I don’t have formal teaching experience?',
        'a_html' => 'Yes. While teaching experience is welcomed, it is not required.<br>We provide comprehensive training and classroom support to help you develop the skills needed to work confidently with children.',
      ],
      [
        'q' => 'What qualifications are you looking for?',
        'a_html' => 'We look for candidates who are passionate about working with children, collaborative team players, and committed to creating a positive learning environment.<br>Previous experience in childcare, education, coaching, or related fields is a plus.',
      ],
      [
        'q' => 'What is the teaching environment like?',
        'a_html' => 'You will work in an immersive English environment alongside both international and Japanese staff.<br>Classes focus on active learning, communication, and helping children build confidence in English through engaging activities.',
      ],
      [
        'q' => 'What kind of questions are asked during the interview?',
        'a_html' => 'We will ask about your previous experience, your motivation for applying, and your approach to working with children.<br>The interview is also an opportunity for you to learn more about our program and ask any questions you may have.',
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
      <a class="sm-faq-section__apply" href="<?php echo esc_url($apply_cta_href ?? 'apply.php'); ?>">Apply Now!</a>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
