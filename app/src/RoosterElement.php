<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextField;

class RoosterElement extends BaseElement
{
    private static $singular_name = 'rooster element';

    private static $plural_name = 'rooster elements';

    private static $description = 'An element with images of rooster';

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
        return 'Rooster Element';
    }

    public function Teams()
    {
        return Team::get();
    }
}