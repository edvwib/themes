<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="/">Yrgo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <?php foreach (get_pages() as $page): ?>
          <li class="nav-item">
            <a class="nav-link <?= isActive($page->post_name); ?>" href="<?php echo $page->guid ?>"><?php echo $page->post_title ?></a>
          </li>
        <?php endforeach; ?>

      </ul>
    </div>
  </nav>
  <div class="container">
