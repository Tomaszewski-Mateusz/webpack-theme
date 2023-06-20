<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= get_the_title() ?> | <?= get_bloginfo('name'); ?></title>

  <?php wp_head(); ?>

</head>

<body>
  <?php get_template_part('template-parts/header-main');
