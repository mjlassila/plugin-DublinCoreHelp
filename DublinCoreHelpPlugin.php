<?php
/**
 * Dublin Core Help
 *
 * @copyright Copyright 2015 Matti Lassila
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 */

/**
 * The Dublin Core Help plugin. Based on DC Extented.
 *
 * @package Omeka\Plugins\DublinCoreHelp
 */
class DublinCoreHelpPlugin extends Omeka_Plugin_AbstractPlugin
{
    /**
     * @var array Hooks for the plugin.
     */
    protected $_hooks = array(
        'install'
    );

    /**
     * @var array Filters for the plugin.
     */

    private $_elements;

    private $_dcElements = array(
        'Title',
        'Alternative Title',
        'Contributor',
        'Creator',
        'Subject',
        'Description',
        'Publisher',
        'Contributor',
        'Date Created',
        'Date Issued',
        'Format',
        'Identifier',
        'Language',
        'Rights',
        'Provenance'
    );

    public function __construct()
    {
        parent::__construct();

        // Set the elements.
        include 'elements.php';
        $this->_elements = $elements;
    }

    /**
     * Install the plugin.
     */
    public function hookInstall()
    {
        // Adds the comment field containing help text to the Dublin Core element set.
        foreach ($this->_elements as $key => $element) {
            if (in_array($element['label'], $this->_dcElements)) {
                $sql = "UPDATE {$this->_db->Element} SET comment = ? WHERE name = ?";
                $this->_db->query($sql, array($element['comment'], $element['label']));
            }
        }
    }
                     
}
