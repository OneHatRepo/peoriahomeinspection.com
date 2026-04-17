<?php defined("C5_EXECUTE") or die("Access Denied.");

$form = Core::make('helper/form');
if (!isset($text)) {
	$text = null;
}
if (!isset($color)) {
	$color = null;
}
?>

<div class="form-group">
	<?php echo $form->label($view->field('text'), t("Text")); ?>
	<?php echo isset($btFieldsRequired) && in_array('text', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
	<?php echo Core::make('editor')->outputBlockEditModeEditor($view->field('text'), $text); ?>
</div>

<script type="text/javascript">
	$(function () {
		$("#color").spectrum({"color":false,"appendTo":".ui-dialog","containerClassName":"","replacerClassName":"","flat":false,"showInput":false,"allowEmpty":true,"showButtons":true,"clickoutFiresChange":true,"showInitial":true,"showPalette":true,"showPaletteOnly":false,"hideAfterPaletteSelect":true,"togglePaletteOnly":true,"showSelectionPalette":false,"localStorageKey":"stickies.color","preferredFormat":"hsl","showAlpha":true,"disabled":false,"maxSelectionSize":7,"cancelText":"cancel","chooseText":"choose","togglePaletteMoreText":"more","togglePaletteLessText":"less","clearText":"Clear Color Selection","noColorSelectedText":"No Color Selected","theme":"sp-light","selectionPalette":[],"offset":null, hide: function(color) {
				$('.sp-container').hide();
				},
				beforeShow: function(tinycolor) {
					$('.sp-container').show();
				},"palette":[["#ffff00","#00ff18","#00c0ff","#f583ff"]]});
	});
</script><div class="form-group">
	<?php echo $form->label($view->field('color'), t("Color")); ?>
	<?php echo isset($btFieldsRequired) && in_array('color', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
	<?php echo $form->text($view->field('color'), $color, array (
'placeholder' => NULL,
)); ?>
</div>