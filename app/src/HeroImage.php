<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class HeroImage extends DataObject
{
    private static $db = array(
        'Title' => 'Text',
        'Subtitle' => 'Text'
    );

    private static $has_one = array(
        'Image' => Image::class,
        'VideoThumbnail' => Image::class,
        'HeroElement' => HeroElement::class
    );

    private static $owns = array(
        'Image',
        'VideoThumbnail'
    );
}
