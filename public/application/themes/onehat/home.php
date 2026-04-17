<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('includes/html_header.php');
?>

<div id="hero">
	<div class="container">
		<div id="flameContainer">
			<div class="E"></div>
			<div class="W"></div>
		</div>
		<!-- <img class="img-fluid" src="<?= $view->getThemePath() ?>/img/employees-2020.jpg" alt="" /> -->
		<img class="img-fluid" src="https://www.firetechinvestigations.com/application/files/4116/9773/9705/2023_Group.jpg" alt="" />
		
	</div>
</div>

<div class="contentArea">
	<div class="internalPage overridesApply">
		<?php
		$a = new Area('Main');
		$a->enableGridContainer();
		$a->display($c);
		?>
	</div>
</div>

<?php
$this->inc('includes/html_footer.php');
?>