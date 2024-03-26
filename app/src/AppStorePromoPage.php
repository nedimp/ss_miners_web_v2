<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;

class AppStorePromoElement extends BaseElement {
    private static $singular_name = 'App Store Promo Element';

    private static $plural_name = 'App Store Promo Elements';

    private static $description = 'An element for App Store promotion';

    private static $has_one = [
        'PromoImage' => Image::class,
    ];

    private static $owns = [
        'PromoImage',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', UploadField::create('PromoImage', 'Promotion Image'));

        return $fields;
    }

    public function getType()
    {
        return 'App Store Promo Element';
    }
}