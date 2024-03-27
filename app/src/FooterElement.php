<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class FooterElement extends BaseElement
{
    private static $singular_name = 'footer element';

    private static $plural_name = 'footer elements';

    private static $description = 'A footer for a page';

    public function getType()
    {
        return 'Footer Element';
    }
}