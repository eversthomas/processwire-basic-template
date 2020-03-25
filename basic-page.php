<?php
/*
  ** use the following in your config.php to activate Markup Regions
  ** $ config-> useMarkupRegions = true; - activate markup regions
  ** $ config-> appendTemplateFile = '_main.php'; - add on every file a _main.php at the end
*/
?>

// MarkupRegion header
<div pw-after = 'masthead'>
  <h1><?php echo $page->title; ?></h1>
  <p><?php echo $page->description; ?>
</div>

// MarkupRegion navigation
<ul class = 'top-nav' pw-prepend = 'sidebar'>
   <? = $ page-> children-> each ("<li> <a href='{url}'> {title} </a> </ li>")?>
 </ ul> 

// MarkupRegion main content
<div pw-after = 'main-content'>
  <h3><?php echo $page->title; ?></h3>
  <p><?php echo $page->body; ?></p>
</div>

// MarkupRegion sidebar

//MarkupRegion footer


?>
