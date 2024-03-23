<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class JoinUsElement extends BaseElement
{
    private static $singular_name = 'join us element';

    private static $plural_name = 'join us elements';

    private static $description = 'A join us message';

    private static $db = array(
        'Title' => 'Text',
        'Subtitle' => 'Text',
        'Content' => 'Text',
        'JoinLabel' => 'Text',
        'EventsLabel' => 'Text',
    );

    private static $has_one = array(
        'Image' => Image::class
    );

	public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', TextField::create('Title'));
        $fields->addFieldToTab('Root.Main', TextField::create('Subtitle'));
        $fields->addFieldToTab('Root.Main', TextField::create('Content'));
        $fields->addFieldToTab('Root.Main', TextField::create('JoinLabel'));
        $fields->addFieldToTab('Root.Main', TextField::create('EventsLabel'));
        $fields->addFieldToTab('Root.Main', UploadField::create('Image'));

        return $fields;
    }

    // public function getSummary(): string
    // {
    //     return "";
    // }

    public function getType()
    {
        return 'Join Us Element';
    }
}