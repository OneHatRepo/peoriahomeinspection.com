<?php defined('C5_EXECUTE') or die("Access Denied.");

$navItems = $controller->getNavItems();
$c = Page::getCurrentPage();


/*** STEP 1 of 2: Determine all CSS classes (only 2 are enabled by default, but you can un-comment other ones or add your own) ***/
$LIclasses = array();
$Aclasses = array();
$extra = array();
$span = array();
foreach ($navItems as $key => $ni) {
    $classes = array();
	$LIclasses[$key] = array();
	$Aclasses[$key] = array();

    if ($ni->isCurrent) {
        //class for the page currently being viewed
        $classes[] = 'nav-selected';
		$LIclasses[$key][] = 'active';
    }

    if ($ni->inPath) {
        //class for parent items of the page currently being viewed
        $classes[] = 'nav-path-selected';
    }

    /*
    if ($ni->isFirst) {
        //class for the first item in each menu section (first top-level item, and first item of each dropdown sub-menu)
        $classes[] = 'nav-first';
    }
    */

    /*
    if ($ni->isLast) {
        //class for the last item in each menu section (last top-level item, and last item of each dropdown sub-menu)
        $classes[] = 'nav-last';
    }
    */

    
    if ($ni->hasSubmenu) {
        //class for items that have dropdown sub-menus
        $LIclasses[$key][] = 'dropdown';
		$Aclasses[$key][] = 'dropdown-toggle';
		$extra[$key] = 'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"';
		$span[$key] = ' <span class="caret"></span>';
		
	}
    

    /*
    if (!empty($ni->attrClass)) {
        //class that can be set by end-user via the 'nav_item_class' custom page attribute
        $classes[] = $ni->attrClass;
    }
    */

    /*
    if ($ni->isHome) {
        //home page
        $classes[] = 'nav-home';
    }
    */

    /*
    //unique class for every single menu item
    $classes[] = 'nav-item-' . $ni->cID;
    */

    //Put all classes together into one space-separated string
    $ni->classes = implode(" ", $classes);
    $LIclasses[$key] = implode(" ", $LIclasses[$key]);
    $Aclasses[$key] = implode(" ", $Aclasses[$key]);
}

//*** Step 2 of 2: Output menu HTML ***/
echo '<div class="container">';

if (count($navItems) > 0) {
	
	
    echo '<ul>';
    foreach ($navItems as $key => $ni) {
        echo '<li class="' . $LIclasses[$key] . '">'; //opens a nav item
        echo '<a href="' . $ni->url . '" target="' . $ni->target . '" class="' . $ni->classes . ' ' . $Aclasses[$key] . '" ' . $extra[$key] . '">' . $ni->name . $span[$key] . '</a>';

        if ($ni->hasSubmenu) {
            echo '<ul class="dropdown-menu">'; //opens a dropdown sub-menu
        } else {
            echo '</li>'; //closes a nav item
            echo str_repeat('</ul></li>', $ni->subDepth); //closes dropdown sub-menu(s) and their top-level nav item(s)
        }
    }

	/* NEED TO BUILD THIS:
		<li class="active"><a href="#">Welcome</a></li>
		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galleries <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Magnolia Home Gallery</a></li>
				<li><a href="#">Trisha Yearwood Gallery</a></li>
				<li><a href="#">Something else here</a></li>

				<li role="separator" class="divider"></li>

				<li class="dropdown-header">Nav header</li>
				<li><a href="#">Separated link</a></li>
				<li><a href="#">One more separated link</a></li>
			</ul>
		</li>
		<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Brands</a></li>
				<li><a href="#">Locations</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</li>
		<li><a href="#">Gift Certificates</a></li>
	*/

    echo '</ul>';
	

	
} elseif (is_object($c) && $c->isEditMode()) {
    ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Auto-Nav Block.')?></div>
<?php 
}
echo '</div>';
?>
