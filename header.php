<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= get_the_title() ?></title>

  <?php if (is_page('kontakt')) {
    if (function_exists('wpcf7_enqueue_scripts')) {
      wpcf7_enqueue_scripts();
    }

    if (function_exists('wpcf7_enqueue_styles')) {
      wpcf7_enqueue_styles();
    }
  } ?>

  <?php wp_head(); ?>

</head>

<body>
  <?php get_template_part('template-parts/header/main');
