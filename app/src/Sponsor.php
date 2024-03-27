<?php
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\ORM\DataObject;

class Sponsor extends DataObject {
    private static $db = [];

    private static $has_one = [
        'Logo' => Image::class,
    ];

    private static $owns = [
        'Logo',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', $logo = UploadField::create('Logo'));

        $logo->setFolderName('SponsorLogos');
        $logo->getValidator()->setAllowedExtensions(['png','gif','jpeg','jpg']);

        return $fields;
    }
}