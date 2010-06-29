<div id="block-<?php print $block->module . '-' . $block->delta; ?>" class="block <?php print $block_classes; ?>">
	<div class="block-inner">
		  <?php if ($block->subject): ?>
			<div class="block-header">
				<h1 class="title"><?php print $block->subject; ?></h1>
			</div>
		  <?php endif; ?>

		  <div class="block-content">
			<?php print $block->content; ?>
		  </div>

		  <?php if ($edit_links): ?>
			<div class="block-links">
				<?php print $edit_links; ?>
			</div>
		  <?php endif; ?>
	</div>
</div>