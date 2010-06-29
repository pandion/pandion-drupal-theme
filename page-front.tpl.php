<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<title><?php print $head_title ?></title>
<?php
	drupal_add_feed('http://feeds.feedburner.com/pandionblog', t('Pandion Blog'));
	drupal_add_feed('http://twitter.com/statuses/user_timeline/pandion.rss', t('Pandion Tweets'));
	$head = drupal_get_html_head();
	print $head;
?>
<?php print $styles ?>
<?php
	$js = drupal_add_js('misc/jquery.js', 'core', 'header');
	print drupal_get_js('header', $js);
?>
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/unitpngfix.js"></script>
<![endif]--> 
</head>
<body>

<?php // print($site_name) ?>
<?php // print($site_title) ?>
<?php // print($site_slogan) ?>

<?php include "header.inc.php"; ?>

<!-- MASTHEAD -->
<div id="masthead" class="outer-wrapper">
	<div class="inner-wrapper">
		<div class="col-1">
			<?php print $masthead_col_1 ?>
		</div>
		<div class="col-2">
			<?php print $masthead_col_2 ?>
		</div>
	</div>
</div>
<!-- /MASTHEAD -->

<!-- FRONTPAGE BLURBS COLUMNS -->
<div id="frontpage-blurbs" class="outer-wrapper">
	<div class="inner-wrapper">
		<div class="col-1 hilighted">
			<?php print $frontpage_col_1 ?>
		</div>
		<div class="col-2">
			<?php print $frontpage_col_2 ?>
		</div>
		<div class="col-3">
			<?php print $frontpage_col_3 ?>
		</div>
	</div>
</div>
<!-- /FRONTPAGE BLURBS COLUMNS -->

<?php include "footer.inc.php"; ?>

<?php print $closure ?>
</body>
</html>