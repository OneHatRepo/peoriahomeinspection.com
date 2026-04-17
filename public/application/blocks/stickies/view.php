<?php defined("C5_EXECUTE") or die("Access Denied.");

$c = $this->getBlock()->getBlockCollectionObject();

$cp = new Permissions($c);
if (!$cp->canEditPageContents()) {
	return;
}

if (!isset($color) || empty(trim($color))) {
	$color = '#ffff00';
}
if (isset($text) && trim($text) != "") {
	echo "<div class=\"sticky\">{$text}</div>";
}
?>
<style type="text/css">
.sticky {
	position: relative;
	display: block;
	color: #000;
	background: <?= $color ?>;
	padding: 50px 30px;
	-webkit-box-shadow: 0 5px 3px 0 rgba(0,0,0,0.5);
	box-shadow: 0 5px 3px 0 rgba(0,0,0,0.5);
}
</style>
