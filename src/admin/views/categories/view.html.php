<?php
/**
 * @package   OSContent
 * @contact   www.joomlashack.com, help@joomlashack.com
 * @copyright 2011-2018 Open Source Training, LLC, All rights reserved
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */

defined('_JEXEC') or die();

require_once JPATH_ADMINISTRATOR . '/components/com_oscontent/views/view.php';

/**
 * Mass Category View
 *
 * @since  1.0.0
 */
class OSContentViewCategories extends OSView
{
    /**
     * Method to display the view
     *
     * @param   string $tpl Template file
     *
     * @access    public
     * @return  void
     */
    public function display($tpl = null)
    {
        JToolBarHelper::title(JText::_('COM_OSCONTENT_MASS_CATEGORIES'), 'oscontent.png');
        JToolBarHelper::apply("categories.save");
        JToolbarHelper::cancel('categories.cancel');
        JToolBarHelper::divider();
        JToolBarHelper::spacer();
        JToolBarHelper::preferences('com_oscontent');

        // Get component params
        $params = JComponentHelper::getParams('com_oscontent');

        // Get data
        $lists = $this->get('Data');

        $this->params = $params;
        $this->lists  = $lists;

        parent::display($tpl);
    }
}
