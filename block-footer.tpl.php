<div id="block-<?php print $block->module . '-' . $block->delta; ?>" class="block <?php print $block_classes; ?>">
		  <div class="block-content">
			<?php print $block->content; ?>
		  </div>

		  <?php if ($edit_links): ?>
			<div class="block-links">
				<?php print $edit_links; ?>
			</div>
		  <?php endif; ?>
</div>