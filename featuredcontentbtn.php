<?php
/**
 * @version    1.0.0
 * @package    SPEDI Featured Content Button
 * @author     SPEDI srl - http://www.spedi.it
 * @copyright  Copyright (c) Spedi srl.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

/**
 * Editor Featured Content Btn
 *
 * @since  1.5
 */
class PlgButtonFeaturedContentBtn extends JPlugin
{
	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;

	/**
	 * Featured Content button
	 *
	 * @param string  $name  The name of the button to add
	 *
	 * @return array A two element array of (textToInsert)
	 */
	public function onDisplay($name)
	{
		$doc  = JFactory::getDocument();

		$link = '../plugins/editors-xtd/featuredcontentbtn/display.php?ih_name='.$name;

		JHTML::_('behavior.modal');
		$button          = new JObject;
		$button->modal   = true;
		$button->class   = 'btn';
		$button->text    = JText::_('Contenuto in evidenza');
		$button->name    = 'featured';
		$button->options = "{handler: 'iframe', size: {x: 800, y: 500}}";
		$button->link    = $link;

		return $button;
	}
}
