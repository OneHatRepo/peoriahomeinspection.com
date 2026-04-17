<?php

namespace Application\Theme\Onehat;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {

	public function getThemeName() {
		return t('Integrity Home Inspection');
	}

	public function getThemeDescription() {
		return t('Integrity Home Inspection site theme created by OneHat Technologies, LLC.');
	}

}
