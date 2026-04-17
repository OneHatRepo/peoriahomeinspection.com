<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<?php
$id = 'popup' . $bID;
?>

<div class="modal fade" id="<?= $id ?>" tabindex="-1" aria-labelledby="<?= $id ?>Label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<?php
			if (!empty($title)) { ?>
				<div class="modal-header">
					<h5 class="modal-title" id="<?= $id ?>Label"><?= h($title) ?></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div><?php
			}
			?>
			<div class="modal-body">
				<?= nl2br(h($message), false) ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?php
$hideForMs = 1000 * 60 * 60 * 24; // 1 day
if (isset($show_again_after_minutes) && !empty($show_again_after_minutes)) {
	$hideForMs = intval($show_again_after_minutes) * 60 * 1000;
}

?>
<script>
$(() => {

	const
		now = (new Date()).getTime(),
		cookieValue = Cookies.get('<?= $id ?>'),
		cookieTs = !_.isEmpty(cookieValue) && parseInt(Cookies.get('<?= $id ?>'), 10);
	let showModal = true;
	if (cookieTs && now < cookieTs) {
		showModal = false;
	}

	if (showModal) {
		const
			modalEl = document.getElementById('<?= $id ?>'),
			modal = new bootstrap.Modal(modalEl);
		modalEl.addEventListener('hidden.bs.modal', function (event) {
			const
				now = (new Date()).getTime(),
				ts = now + <?= $hideForMs ?>;
			Cookies.set('<?= $id ?>', ts);
		});
		modal.show();
	}
});
</script>