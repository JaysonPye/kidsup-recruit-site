<?php
if (!isset($page_top_title_line1)) {
  $page_top_title_line1 = 'AIにはできない仕事で';
}
if (!isset($page_top_title_line2)) {
  $page_top_title_line2 = '子どもたちの未来を一緒に切り拓きませんか';
}
if (!isset($page_top_image)) {
  $page_top_image = 'images/top-top.jpg';
}
if (!isset($page_top_image_mob)) {
  $page_top_image_mob = 'images/top-top-mob.jpg';
}
if (!isset($page_top_cta_label)) {
  $page_top_cta_label = '応募はこちら';
}
if (!isset($page_top_cta_href)) {
  $page_top_cta_href = '#';
}
if (!isset($page_top_alt)) {
  $page_top_alt = $page_title ?? 'Kids Up Recruit';
}
?>
<section class="page-top" aria-label="ページトップ">
  <div class="page-top__inner">
    <picture class="page-top__image">
      <source media="(max-width: 768px)" srcset="<?php echo esc_url($page_top_image_mob); ?>">
      <img src="<?php echo esc_url($page_top_image); ?>" alt="<?php echo esc_attr($page_top_alt); ?>" loading="eager" decoding="async">
    </picture>
    <div class="page-top__content">
      <p class="page-top__title ku-text-glow">
        <span><?php echo htmlspecialchars($page_top_title_line1, ENT_QUOTES, 'UTF-8'); ?></span>
        <span><?php echo htmlspecialchars($page_top_title_line2, ENT_QUOTES, 'UTF-8'); ?></span>
      </p>
    </div>
    <a class="page-top__cta" href="<?php echo esc_url($page_top_cta_href); ?>">
      <span class="page-top__cta-label">
        <span class="page-top__cta-text"><?php echo htmlspecialchars($page_top_cta_label, ENT_QUOTES, 'UTF-8'); ?></span>
        <span class="page-top__cta-underline" aria-hidden="true"></span>
      </span>
    </a>
  </div>
</section>
