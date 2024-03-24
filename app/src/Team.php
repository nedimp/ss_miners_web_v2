<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class Team extends DataObject
{
    private static $db = array(
        'Name' => 'Varchar(255)',
        'Slug' => 'Varchar(255)'
    );

    private static $has_many = array(
        'Players' => 'Player',
    );

    private static $has_one = array(
        'Logo' => Image::class,
        'Image' => Image::class,
    );
}
