<?php
global $pTemplateHandle, $sectionPath;

$pTemplateHandle = null;
$pTemplate = $view->getPageTemplate();
if ($pTemplate) {
	$pTemplateHandle = $view->getPageTemplate()->pTemplateHandle;
}

if (!defined('ROOT')) {
	define('ROOT', '/');
}


/**
 * Goes up the page hierarchy until it finds the current section collection (one level below the home page)
 * @return Page representing the current section
 */
if (!function_exists('getCurrentSection')) {
	function getCurrentSection() {
		$current = Page::getCurrentPage();
		if ($current->getCollectionID() === Page::getHomePageID()) {
			return false; // we're at the root
		}
		$path = substr($current->getCollectionPath(), 1); // strip off the leading slash
		$pathParts = explode('/', $path);
		
		return Page::getByPath('/' . $pathParts[0]);
		
		/* VERSION 2
		$current = Page::getCurrentPage();
		$parent = Page::getByID($current->getCollectionParentID());
	
		while($parent->getCollectionParentID() > Page::getHomePageID()) {
			$current = $parent;
			$parent = Page::getByID($current->getCollectionParentID());
		}
		return $current;
		*/
	}
}
$section = getCurrentSection();
$sectionPath = ($section && !$section->error && '' . $section->getCollectionPath() !== '') ? $section->getCollectionPath() : 'home';
if (strpos($sectionPath, '/') === 0) { $sectionPath = substr($sectionPath, 1); }

?>