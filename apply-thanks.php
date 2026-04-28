<?php
$page_title = 'Kids Up Recruit | Thank You';
$body_class = 'page-apply-thanks';
$apply_cta_href = 'apply.php';
$apply_cta_aria_label = '応募フォームへ移動';
$page_top_title_line1 = 'Thank You';
$page_top_title_line2 = "ご応募ありがとうございました\n内容を確認のうえご連絡いたします";
$page_top_image = 'images/top-top.jpg';
$page_top_image_mob = 'images/top-top-mob.jpg';
$page_top_alt = 'Thank you for your application';
$page_top_cta_label = '募集一覧へ';
$page_top_cta_href = 'index.php';
include __DIR__ . '/includes/header.php';
?>
<?php include __DIR__ . '/includes/page-top.php'; ?>

<section class="apply-page">
  <div class="ku-section__inner apply-page__inner">
    <div class="apply-form-wrapper">
      <section class="apply-success">
        <h1 class="apply-success__title">ご応募ありがとうございました。</h1>
        <p class="apply-success__ja">
          内容を確認のうえ、次のステップに進んでいただく方にのみご連絡させていただきます。<br>
          あらかじめご了承ください。
        </p>
        <p class="apply-success__en">
          Thank you for your application.<br>
          We will carefully review the forms and contact only those who passed the first round of selection.
        </p>
      </section>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
