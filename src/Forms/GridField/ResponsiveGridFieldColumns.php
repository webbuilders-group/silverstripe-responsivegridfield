<?php
namespace WebbuildersGroup\ResponsiveGridField\Forms\GridField;

use SilverStripe\Forms\GridField\GridFieldDataColumns;
use SilverStripe\Forms\GridField\GridField_ColumnProvider;
use SilverStripe\View\Requirements;

class ResponsiveGridFieldColumns implements GridField_ColumnProvider
{
    private $_field_titles;
    
    /**
     * Constructor
     * @param array $titlesMap Map of column name to labels
     */
    public function __construct($titlesMap = [])
    {
        $this->_field_titles = $titlesMap;
    }
    
    /**
     * Sets the field titles to use in place of the title for the display field
     * @param array $titlesMap Map of column name to labels
     * @return ResponsiveGridFieldColumns
     */
    public function setFieldTitles($titlesMap)
    {
        $this->_field_titles = $titlesMap;
        
        return $this;
    }
    
    /**
     * Gets the field titles to use in place of the title for the display field
     * @return array Map of column name to labels
     */
    public function getFieldTitles()
    {
        return $this->_field_titles;
    }
    
    /**
     * Names of all columns which are affected by this component.
     * @param GridField $gridField GridField reference
     * @return array
     */
    public function getColumnsHandled($gridField)
    {
        Requirements::css('webbuilders-group/silverstripe-responsivegridfield: css/ResponsiveGridFieldColumns.css');
        
        $gridField->addExtraClass('responsive');
        
        return array_keys($gridField->getConfig()->getComponentByType(GridFieldDataColumns::class)->getDisplayFields($gridField));
    }
    
    /**
     * Attributes for the element containing the content returned by {@link getColumnContent()}.
     * @param GridField $gridField GridField reference
     * @param DataObject $record displayed in this row
     * @param string $columnName Name of the current column
     * @return array
     */
    public function getColumnAttributes($gridField, $record, $columnName)
    {
        if (array_key_exists($columnName, $this->_field_titles)) {
            return ['data-col-title' => $this->_field_titles[$columnName]];
        } else {
            $columnMeta = $gridField->getConfig()->getComponentByType(GridFieldDataColumns::class)->getColumnMetadata($gridField, $columnName);
            if (array_key_exists('title', $columnMeta) && !empty($columnMeta['title'])) {
                return ['data-col-title' => $columnMeta['title']];
            }
        }
        
        return [];
    }
    
    /**
     * Additional metadata about the column which can be used by other components
     * @param GridField $gridField GridField reference
     * @param string $columnName Name of the current column
     * @return array
     */
    public function getColumnMetadata($gridField, $columnName)
    {
        return [];
    }
    
    /**
     * Modify the list of columns displayed in the table.
     * @param GridField $gridField GridField reference
     * @param array $columns List of columns
     */
    public function augmentColumns($gridField, &$columns)
    {
    }
    
    /**
     * HTML for the column, content of the <td> element.
     * @param GridField $gridField GridField reference
     * @param DataObject $record Record displayed in this row
     * @param string $columnName Name of the current column
     * @return string HTML for the column. Return NULL to skip.
     */
    public function getColumnContent($gridField, $record, $columnName)
    {
        return null;
    }
}
