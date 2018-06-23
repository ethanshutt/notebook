<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Stylesheets -->
  <?= css('assets/css/normalize.min.css') ?>
  <?= css('assets/css/style.css') ?>
  
  <!-- Social Sharing -->
  <!-- Facebook -->
  <meta property="fb:app_id" content="123456789">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Content Title">
  <meta property="og:image" content="http://example.com/image.jpg">
  <meta property="og:description" content="Description Here">
  <meta property="og:site_name" content="Site Name">
  <meta property="og:locale" content="en_US">
  <meta property="article:author" content="Author Name">
  
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@site_account">
  <meta name="twitter:creator" content="@individual_account">
  <meta name="twitter:url" content="http://example.com/page.html">
  <meta name="twitter:title" content="Content Title">
  <meta name="twitter:description" content="Content description less than 200 characters">
  <meta name="twitter:image" content="http://example.com/image.jpg">
  
  
  <title><?= $site->title() ?> - <?= $page->title() ?></title>
</head>