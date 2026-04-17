<?php
defined('C5_EXECUTE') or die("Access Denied.");


$this->inc('includes/html_header.php'); ?>

<div id="hero"></div>

<div class="contentArea">
    <div class="overridesApply internalPage">
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