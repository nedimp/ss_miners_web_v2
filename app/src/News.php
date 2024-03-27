<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class News extends DataObject
{
    private static $db = array(
        'Title' => 'Text',
        'Summary' => 'Text',
        'Content' => 'Text'
    );

    private static $has_one = array(
        'Image' => Image::class
    );
}
