<!-- HEADER -->
<div id="header" class="outer-wrapper">
	<?php if ($header): ?>
	<div id="secondary-header" class="inner-wrapper">
		<?php print $header; ?>
	</div>
	<?php endif; ?>
	<div id="primary-header" class="inner-wrapper">
		<div class="col-1">
			<?php if ($logo): ?>
				<div id="logo-area">
					<a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" width="248" height="48" alt="<?php print t('Home') ?>" border="0" /></a>
				</div>
			<?php endif; ?>
		</div>
		<div class="col-2">
			<?php if ($primary_links): ?>
				<div id="main-navlinks">
					<?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?>
				</div>
			<?php endif; ?>		
		</div>
	</div>
</div>
<!-- /HEADER -->