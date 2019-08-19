Usage
=================
Usage of the module is simple, you just need to add the component ``WebbuildersGroup\ResponsiveGridField\Forms\GridField\ResponsiveGridFieldColumns`` to your GridField's configuration. If you need any additional styles you can add them to your stylesheets for your website, you'll need to use the ``.ss-gridfield.responsive`` selector as your base.

#### Example
```php
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use WebbuildersGroup\ResponsiveGridField\Forms\GridField\ResponsiveGridFieldColumns;

$myGridField=new GridField('MyRelationship', 'My GridField', $this->MyRelationship(), GridFieldConfig_RecordEditor::create(10));
$myGridField->getConfig()->addComponent(new ResponsiveGridFieldColumns());
```
