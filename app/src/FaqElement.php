<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

class FAQQuestion extends DataObject
{
    private static $db = array(
        'Question' => 'Text',
        'Answer' => 'Text'
    );

    private static $has_one = array(
        'Element' => FaqElement::class
    );
}

class FaqElement extends BaseElement
{
    private static $singular_name = 'FAQ element';

    private static $plural_name = 'FAQ elements';

    private static $description = 'An element with frequently asked questions';

    private static $db = array(
        'Subtitle' => 'Text',
        'Details' => 'Text',
        'ReadMoreLabel' => 'Text'
    );

    private static $has_one = array(
        'Image' => Image::class
    );

    private static $has_many = array(
        'Questions' => FAQQuestion::class
    );

    private static $owns = array(
        'Questions'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', TextField::create('Subtitle'));
        $fields->addFieldToTab('Root.Main', TextField::create('Details'));
        $fields->addFieldToTab('Root.Main', TextField::create('ReadMoreLabel'));
        $fields->addFieldToTab('Root.Main', UploadField::create('Image'));

        $fields->addFieldToTab('Root.Main', GridField::create(
            'Questions',
            'Questions on FAQ section',
            $this->Questions(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

    public function getType()
    {
        return 'FAQ Element';
    }

    public function Teams()
    {
        return Team::get();
    }
}