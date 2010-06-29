<!-- FOOTER -->
<div id="footer" class="outer-wrapper">
	<!-- PRIMARY FOOTER -->
	<div id="primary-footer" class="inner-wrapper">
		<div class="col-1">
			<?php print $footer_col_1 ?>
		</div>
		<div class="col-2">
			<?php print $footer_col_2 ?>
		</div>
		<div class="col-3">
			<?php print $footer_col_3 ?>
		</div>
		<div class="col-4">
			<?php print $footer_col_4 ?>
		</div>
	</div>
	<!-- /PRIMARY FOOTER -->

	<!-- SECONDARY FOOTER -->
	<div id="secondary-footer" class="inner-wrapper">
		<div class="col-1">
			<?php if ($google_cse): ?>
				<div id="google_cse">
					<?php print $google_cse ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="col-2">
			<?php if ($secondary_links): ?>
				<div id="sub-navlinks">
					<?php print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnavlist')) ?>
				</div>
			<?php endif; ?>
			<?php if ($footer_note): ?>
				<div id="footer-message">
					<?php print $footer_note ?>
				</div>
			<?php endif; ?>
			<?php if ($footer): ?>
				<div id="footer-region">
					<?php print $footer ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<!-- /SECONDARY FOOTER -->

</div>
<!-- /FOOTER -->
