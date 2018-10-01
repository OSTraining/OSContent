<?php
/**
 * @package   OSContent
 * @contact   www.joomlashack.com, help@joomlashack.com
 * @copyright 2011-2018 Open Source Training, LLC, All rights reserved
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */

defined('_JEXEC') or die();

JHtml::_('behavior.framework');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
?>

<?php if (!empty($this->sidebar)): ?>
<div id="j-sidebar-container" class="span2">
    <?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">
    <?php else : ?>
    <div id="j-main-container">
        <?php endif; ?>

        <script language="javascript" type="text/javascript">
            Joomla.submitbutton = function (task, type) {
                if (task === 'delete.delete') {
                    if (confirm("<?php echo JText::_("COM_OSCONTENT_DELETE_ALL");?>"))
                        Joomla.submitform(task, document.id('delete-form'));
                    else return;
                }
                else {
                    Joomla.submitform(task, document.id('delete-form'));
                }
            };
        </script>

        <form action="<?php echo JRoute::_('index.php?option=com_oscontent'); ?>" method="post" name="adminForm"
              id="delete-form" class="adminForm form-validate">

            <script language="javascript" type="text/javascript">
                // var sectioncategories = new Array;
                //
                <?php
                        // $i = 0;
                        // foreach ($this->lists['sectioncategories'] as $k=>$items) {
                        //  foreach ($items as $v) {
                        //      echo "sectioncategories[".$i++."] = new Array('$k','".addslashes($v->id)."','".addslashes($v->name)."');\t";
                        //  }
                        // }
                        // ?>
            </script>
            <fieldset>
                <legend><?php echo JText::_("COM_OSCONTENT_DELETE_SECTIONS_CATEGORIES"); ?></legend>
                <table border="0" cellpadding="3" cellspacing="0">
                    <tr>
                        <td colspan="2"><?php echo JText::_("COM_OSCONTENT_DESTROY_ALL"); ?></td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;"><?php echo JText::_(
                                    "COM_OSCONTENT_CATEGORY"
                                ) . " " . $this->lists['catid']; ?></td>
                        <td><input type="checkbox" id="deleteCategory" name="deleteCategory"><?php echo JText::_(
                                "COM_OSCONTENT_DELETE_CATEGORIES"
                            ); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo JText::_('COM_OSCONTENT_CONTENT'); ?></td>
                        <td><input type="checkbox" id="deleteContentOnly" name="deleteContentOnly"><?php echo JText::_(
                                "COM_OSCONTENT_DELETE_CONTENT_ONLY"
                            ); ?></td>
                    </tr>
                </table>
            </fieldset>

            <input type="hidden" name="task" value=""/>
            <?php echo JHtml::_('form.token'); ?>
        </form>
    </div>
    <!-- #j-main-container -->

<?php echo $this->extension->getFooterMarkup(); ?>
