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

<?php include "header.inc.php"; ?>

<!-- INNERPAGE CONTENT -->
<div id="innerpage-content" class="outer-wrapper">
	<div class="inner-wrapper"><div class="inner-wrapperbg">
		<div id="content-header">
			<?php print $breadcrumb ?>	
			<h1><?php print $title ?></h1>
		</div>
		<div class="col-1">
			<div id="content-wrapper">
				<?php print $tabs ?>
				<?php if ($show_messages && $messages): print $messages; endif; ?>
				<?php print $help ?>
				<?php print $mission ?>
				<?php print $content_top; ?>
				<?php print $content; ?>
				<?php print $content_bottom; ?>
			</div>
		</div>
		<div id="sidebars" class="col-2">
			<?php if ($left): ?>
				<div id="left-sidebar">
					<?php print $left ?>
				</div>
			<?php endif; ?>
			<?php if ($right): ?>
				<div id="right-sidebar">
					<?php print $right ?>
				</div>
			<?php endif; ?>
		</div>
	</div></div>
</div>
<!-- /INNERPAGE CONTENT -->

<?php include "footer.inc.php"; ?>

<?php print $closure ?>
</body>
</html>