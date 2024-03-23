<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class HeroElement extends BaseElement
{
    private static $singular_name = 'hero element';

    private static $plural_name = 'hero elements';

    private static $description = 'A here element with images';

    private static $has_many = array(
        'Images' => HeroImage::class
    );

    private static $owns = array(
        'Images'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', GridField::create(
            'Images',
            'Images on header part of page',
            $this->Images(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

    public function getType()
    {
        return 'Hero Element';
    }
}