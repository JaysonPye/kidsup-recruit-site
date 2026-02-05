<?php
if (!isset($page_title)) {
  $page_title = 'Kids Up Recruit';
}
if (!isset($body_class)) {
  $body_class = '';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body class="<?php echo htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8'); ?>">
    <header class="site-header">
      <div class="header-inner">
        <a class="logo" href="index.php">Kids Up Recruit</a>
        <nav class="site-nav">
          <a href="school-manager.php">School Manager</a>
          <a href="bilingual-educator.php">Bilingual Educator</a>
          <a href="native-educator.php">Native Educator</a>
          <div class="nav-group">
            <span>Arubaito</span>
            <div class="nav-group-links">
              <a href="bus-driver.php">Bus Driver</a>
              <a href="bus-staff.php">Bus Staff</a>
            </div>
          </div>
          <a href="graduates.php">Graduates</a>
        </nav>
      </div>
    </header>
    <main class="page-content">
