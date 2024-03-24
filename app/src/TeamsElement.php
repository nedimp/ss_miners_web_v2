<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class TeamsElement extends BaseElement
{
    private static $singular_name = 'teams element';

    private static $plural_name = 'teams elements';

    private static $description = 'A list of teams';

    private static $db = array(
        'Title' => 'Text'
    );

	public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', TextField::create('Title'));

        return $fields;
    }

    public function getType()
    {
        return 'Teams Element';
    }

    public function Teams()
    {
        return Team::get();
    }
}