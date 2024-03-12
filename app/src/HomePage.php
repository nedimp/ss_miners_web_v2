<?php

use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\AssetAdmin\Forms\UploadField;

class HomePage extends Page {

    private static $db = array(
        'JoinUs_Title' => 'Text',
        'JoinUs_Subtitle' => 'Text',
        'JoinUs_Content' => 'Text',
        'JoinUs_JoinLabel' => 'Text',
        'JoinUs_EventsLabel' => 'Text',

        'Rooster_Title' => 'Text'
    );

    private static $has_one = array(
        'JoinUs_Image' => Image::class
    );

    private static $has_many = array(
        'HomePageImages' => HomePageImage::class
    );

    private static $owns = array(
        'HomePageImages',
        'JoinUs_Image'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', GridField::create(
            'HomePageImages',
            'Images on header part of page',
            $this->HomePageImages(),
            GridFieldConfig_RecordEditor::create()
        ));

        $fields->addFieldToTab('Root.Main', TextField::create('JoinUs_Title'));
        $fields->addFieldToTab('Root.Main', TextField::create('JoinUs_Subtitle'));
        $fields->addFieldToTab('Root.Main', TextField::create('JoinUs_Content'));
        $fields->addFieldToTab('Root.Main', TextField::create('JoinUs_JoinLabel'));
        $fields->addFieldToTab('Root.Main', TextField::create('JoinUs_EventsLabel'));
        $fields->addFieldToTab('Root.Main', UploadField::create('JoinUs_Image'));
        
        $fields->addFieldToTab('Root.Main', TextField::create('Rooster_Title'));

        return $fields;
    }

    public function Teams()
    {
        return Team::get();
    }
}