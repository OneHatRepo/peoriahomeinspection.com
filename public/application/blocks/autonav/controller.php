<?php
namespace Application\Block\Autonav;

// This is brute-force overriding all autonav instances so that they ignore the 
// Bootstrap Grid system. Other sites would need a more elegant solution
// But for the Furniture Gallery this will work well enough!
class Controller extends \Concrete\Block\Autonav\Controller
{
	protected $btIgnorePageThemeGridFrameworkContainer = true;

}
