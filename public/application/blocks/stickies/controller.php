<?php namespace Application\Block\Stickies;

defined("C5_EXECUTE") or die("Access Denied.");

use Concrete\Core\Block\BlockController;
use Concrete\Core\Editor\LinkAbstractor;
use Core;

class Controller extends BlockController
{
	public $btFieldsRequired = ['text'];
	protected $btTable = 'btStickies';
	protected $btInterfaceWidth = 600;
	protected $btInterfaceHeight = 500;
	protected $btIgnorePageThemeGridFrameworkContainer = false;
	protected $btCacheBlockRecord = false;
	protected $btCacheBlockOutput = false;
	protected $btCacheBlockOutputOnPost = false;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $pkg = false;
	
	public function getBlockTypeName()
	{
		return t("Stickies");
	}

	public function getSearchableContent()
	{
		$content = [];
		$content[] = $this->text;
		return implode(" ", $content);
	}

	public function view()
	{
		$this->set('text', LinkAbstractor::translateFrom($this->text));
	}

	public function add()
	{
		$this->addEdit();
	}

	public function edit()
	{
		$this->addEdit();
		
		$this->set('text', LinkAbstractor::translateFromEditMode($this->text));
	}

	protected function addEdit()
	{
		$this->requireAsset('redactor');
		$this->requireAsset('core/file-manager');
		$this->requireAsset('core/colorpicker');
		$this->set('btFieldsRequired', $this->btFieldsRequired);
		$this->set('identifier_getString', Core::make('helper/validation/identifier')->getString(18));
	}

	public function save($args)
	{
		$args['text'] = LinkAbstractor::translateTo($args['text']);
		parent::save($args);
	}

	public function validate($args)
	{
		$e = Core::make("helper/validation/error");
		if (in_array("text", $this->btFieldsRequired) && (trim($args["text"]) == "")) {
			$e->add(t("The %s field is required.", t("Text")));
		}
		if (in_array("color", $this->btFieldsRequired) && (trim($args["color"]) == "")) {
			$e->add(t("The %s field is required.", t("Color")));
		}
		return $e;
	}

	public function composer()
	{
		$this->edit();
	}
}