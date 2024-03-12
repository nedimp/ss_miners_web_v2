<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class HomePageImage extends DataObject
{
    private static $db = array(
        'Title' => 'Text',
        'Subtitle' => 'Text'
    );

    private static $has_one = array(
        'Image' => Image::class,
        'VideoThumbnail' => Image::class,
        'HomePage' => HomePage::class
    );

    private static $owns = array(
        'Image',
        'VideoThumbnail'
    );
}
