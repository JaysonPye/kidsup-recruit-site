<?php
if (!isset($page_title)) {
  $page_title = 'Kids Up Recruit';
}
if (!isset($body_class)) {
  $body_class = '';
}
if (!isset($body_id)) {
  $body_id = basename($_SERVER['SCRIPT_NAME'] ?? 'page', '.php');
}
if (!isset($apply_cta_href)) {
  $apply_cta_href = 'apply.php';
}
if (!isset($apply_cta_aria_label)) {
  $apply_cta_aria_label = '応募フォームへ';
}
if (!isset($post) || !is_object($post)) {
  $post = (object) ['post_name' => $body_id];
}

if (!function_exists('home_url')) {
  function home_url($path = '/') {
    $base = 'https://kids-up.jp/';
    $clean = ltrim($path, '/');
    return $base . ($clean !== '' ? $clean : '');
  }
}
if (!function_exists('get_template_directory_uri')) {
  function get_template_directory_uri() {
    return '.';
  }
}
if (!function_exists('the_title')) {
  function the_title() {
    global $page_title;
    echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8');
  }
}
if (!function_exists('wp_head')) {
  function wp_head() {
  }
}
if (!function_exists('wp_footer')) {
  function wp_footer() {
  }
}
if (!function_exists('wp_nav_menu')) {
  function wp_nav_menu($args = []) {
  }
}
if (!function_exists('body_class')) {
  function body_class() {
    global $body_class;
    echo 'class="' . htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8') . '"';
  }
}
if (!function_exists('esc_url')) {
  function esc_url($url) {
    return htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
  }
}
if (!function_exists('esc_attr')) {
  function esc_attr($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
  }
}
if (!function_exists('ku_webp_variant')) {
  function ku_webp_variant($path) {
    $info = pathinfo($path);
    if (empty($info['extension'])) {
      return null;
    }
    $ext = strtolower($info['extension']);
    if ($ext !== 'jpg' && $ext !== 'jpeg') {
      return null;
    }
    $dir = isset($info['dirname']) && $info['dirname'] !== '.' ? $info['dirname'] . '/' : '';
    $webp = $dir . $info['filename'] . '.webp';
    $root = dirname(__DIR__);
    return is_file($root . '/' . $webp) ? $webp : null;
  }
}
if (!function_exists('ku_attr_string')) {
  function ku_attr_string($attrs = []) {
    $parts = [];
    foreach ($attrs as $key => $value) {
      if ($value === null || $value === false) {
        continue;
      }
      if ($value === true) {
        $parts[] = esc_attr($key);
        continue;
      }
      $parts[] = esc_attr($key) . '="' . esc_attr($value) . '"';
    }
    return $parts ? ' ' . implode(' ', $parts) : '';
  }
}
if (!function_exists('ku_image')) {
  function ku_image($src, $alt = '', $attrs = []) {
    $img_attrs = ku_attr_string($attrs);
    $webp = ku_webp_variant($src);
    if ($webp !== null) {
      return '<picture><source srcset="' . esc_url($webp) . '" type="image/webp"><img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '"' . $img_attrs . '></picture>';
    }
    return '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '"' . $img_attrs . '>';
  }
}
?>
<!doctype html>
<html lang="ja" prefix="og: https://ogp.me/ns#">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- EBiS customize area start -->
<script type="text/javascript">
    window.ebis=window.ebis||[];
    ebis.push({
        argument: 'UUQ5rhNV',
        page_id: 'complete',
        member_name: 'KidsUP_complete',
        amount: '',
        other1: '',
        other2: '',
        other3: '',
        other4: '',
        other5: '',
    });
</script>
<!-- EBiS customize area end -->

<!-- EBiS tag version4.10 start -->
<script type="text/javascript">
    (function(a,d,e,b,i,s){ window[i]=window[i]||[];var f=function(a,d,e,b,i,s){
        var o=a.getElementsByTagName(d)[0],h=a.createElement(d),t='text/javascript';
        h.type=t;h.async=e;h.onload=function(){ window[i].init(
            { argument:s, auto:true }
        );};h._p=o;return h;},h=f(a,d,e,b,i,s),l='//taj',j=b+s+'/cmt.js';h.src=l+'1.'+j;
        h._p.parentNode.insertBefore(h,h._p);h.onerror=function(k){k=f(a,d,e,b,i,s);
        k.src=l+'2.'+j;k._p.parentNode.insertBefore(k,k._p);};
    })(document,'script',true,'ebis.ne.jp/','ebis','UUQ5rhNV');
</script>
<!-- EBiS tag end -->

<!-- Google Tag Manager -->
<script>!function(){"use strict";function l(e){for(var t=e,r=0,n=document.cookie.split(";");r<n.length;r++){var o=n[r].split("=");if(o[0].trim()===t)return o[1]}}function s(e){return localStorage.getItem(e)}function u(e){return window[e]}function A(e,t){e=document.querySelector(e);return t?null==e?void 0:e.getAttribute(t):null==e?void 0:e.textContent}var e=window,t=document,r="script",n="dataLayer",o="https://sitescope.kids-up.jp",a="",i="bqbltvzvksu",c="239=HBdWMS47WSEyJDgnNj5SGkhBRUdcEhpRHhoPBVcDBEIfAw%3D%3D",g="stapeUserId",v="",E="",d=!1;try{var d=!!g&&(m=navigator.userAgent,!!(m=new RegExp("Version/([0-9._]+)(.*Mobile)?.*Safari.*").exec(m)))&&16.4<=parseFloat(m[1]),f="stapeUserId"===g,I=d&&!f?function(e,t,r){void 0===t&&(t="");var n={cookie:l,localStorage:s,jsVariable:u,cssSelector:A},t=Array.isArray(t)?t:[t];if(e&&n[e])for(var o=n[e],a=0,i=t;a<i.length;a++){var c=i[a],c=r?o(c,r):o(c);if(c)return c}else console.warn("invalid uid source",e)}(g,v,E):void 0;d=d&&(!!I||f)}catch(e){console.error(e)}var m=e,g=(m[n]=m[n]||[],m[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"}),t.getElementsByTagName(r)[0]),v=I?"&bi="+encodeURIComponent(I):"",E=t.createElement(r),f=(d&&(i=8<i.length?i.replace(/([a-z]{8}$)/,"kp$1"):"kp"+i),!d&&a?a:o);E.async=!0,E.src=f+"/"+i+".js?"+c+v,null!=(e=g.parentNode)&&e.insertBefore(E,g)}();</script>
<!-- End Google Tag Manager -->
<title><?php the_title(); ?> | 学童保育型 英語・英会話スクール Kids UP （キッズアップ）</title>
<meta name="description" content="Kids UP（キッズアップ）は英語で預かる子供の学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。">
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/otherpage.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/lity.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@100;300;400;500;700;900&amp;family=Noto+Serif+SC:wght@200;300;400;500;600;700;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/scrollmenu.js" type="text/javascript"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/topmenu-scroll.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/catalog_anker.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slickslider-main.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/footerbar-scroll.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scroll-fadein.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lity.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/more-btn.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tabcontroller.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://kit.fontawesome.com/2c054eec39.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<meta property="og:url" content="https://kids-up.jp/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php the_title(); ?> | 学童保育型 英語・英会話スクール Kids UP （キッズアップ）" />
<meta property="og:description" content="Kids UP（キッズアップ）は英語で預かる子供の学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。" />
<meta property="og:site_name" content="学童保育型 英語・英会話スクール Kids UP （キッズアップ）" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/kidsup_ogp.png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/kidsup_ogp.png" />

<link rel="stylesheet" href="css/styles.css">
<?php wp_head(); ?>
</head>
<body id="<?php echo esc_attr($post->post_name); ?>" <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://sitescope.kids-up.jp/ns.html?id=GTM-MGWSQLH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div class="cp_cont">
		<!-- Start TOP Floating-->
		<!-- End TOP Floating-->

		<header class="ku-header">
			<div class="ku-header__inner">
				<a class="ku-logo" href="<?php echo esc_url(home_url("/")); ?>">
					<img src="images/logo.svg" alt="Kids UP" width="200" height="60">
				</a>
				<button id="nav_toggle" class="ku-nav-toggle" type="button" aria-label="メニューを開閉" aria-controls="nav-top" aria-expanded="false">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<nav id="nav-top" class="ku-nav" aria-label="メインナビゲーション">
					<ul class="ku-nav__list">
						<li><a href="index.php">メインページ</a></li>
						<li><a class="ku-nav-break" href="school-manager.php">スクール<br>マネージャー</a></li>
						<li><a class="ku-nav-break" href="bilingual-educator.php">バイリンガル<br>エデュケーター</a></li>
						<li><a class="ku-nav-break" href="native-educator.php">Native<br>Educator</a></li>
						<li class="has-submenu">
							<button class="ku-submenu-toggle" type="button" aria-expanded="false" aria-controls="ku-submenu-bus">アルバイト</button>
							<ul id="ku-submenu-bus" class="ku-submenu">
								<li><a href="bus-staff.php">バス添乗員</a></li>
								<li><a href="bus-driver.php">バスドライバー</a></li>
							</ul>
						</li>
						<li><a class="ku-cta" href="<?php echo esc_url($apply_cta_href); ?>" aria-label="<?php echo esc_attr($apply_cta_aria_label); ?>">応募はこちら</a></li>
					</ul>
				</nav>
			</div>
		</header>
    <main class="page-content">
