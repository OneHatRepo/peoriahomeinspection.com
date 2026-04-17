<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('includes/html_header.php'); ?>

<main>
	<div class="container">
		<div class="row">
			<div class="col-12">

				<?php View::element('system_errors', array('format' => 'block', 'error' => isset($error) ? $error : null, 'success' => isset($success) ? $success : null, 'message' => isset($message) ? $message : null)); ?>

				<?php print $innerContent; ?>
			</div>
		</div>
	</div>
</main>

<?php  $this->inc('includes/html_footer.php'); ?>
