<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('includes/init.php');

global $pTemplateHandle, $sectionPath;
?>
<!DOCTYPE html>
<html class="no-js" lang="<?php echo Localization::activeLanguage() ?>">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="apple-touch-icon" sizes="180x180" href="<?= $view->getThemePath(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $view->getThemePath(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $view->getThemePath(); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?= $view->getThemePath(); ?>/site.webmanifest">
	<link rel="mask-icon" href="<?= $view->getThemePath(); ?>/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<?php
	View::element('header_required', [
		'pageTitle' => isset($pageTitle) ? $pageTitle : '',
		'pageDescription' => isset($pageDescription) ? $pageDescription : '',
		'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
	]);
	?>
	
	<link rel="stylesheet" type="text/css" href="<?= $view->getThemePath(); ?>/css/main.css">
	<?php if (file_exists(DIR_FILES_THEMES . '/onehat/css/' . $pTemplateHandle . '.css')) { ?>
		<link href="<?= $view->getThemePath(); ?>/css/<?= $pTemplateHandle ?>.css" rel="stylesheet">
	<?php } ?>
	<?php if (is_file(DIR_FILES_THEMES . '/onehat/css/' . $sectionPath . '.css') && $pTemplateHandle !== $sectionPath) { ?>
		<link href="<?= $view->getThemePath(); ?>/css/<?= $sectionPath ?>.css" rel="stylesheet">
	<?php } ?>
	<?php if (intval($c->getCollectionID()) === 1) { ?>
		<link href="<?= $view->getThemePath() ?>/css/home.css" rel="stylesheet">
	<?php } else { ?>
		<link href="<?= $view->getThemePath() ?>/css/internal.css" rel="stylesheet">
	<?php } ?>

</head>
<?php
$bodyClasses = [$pTemplateHandle];
if (User::isLoggedIn() || $c->isEditMode()) {
	$bodyClasses[] = 'editMode';
}
?>
<body class="<?php echo join(' ', $bodyClasses); ?>">

	<div class="<?= $c->getPageWrapperClass() ?>">
	<a name="top" class="top"></a>
	<div id="bumper"></div>

	