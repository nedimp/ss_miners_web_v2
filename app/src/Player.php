<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class Player extends DataObject
{
    private static $db = array(
        'FirstName' => 'Varchar(100)',
        'LastName' => 'Varchar(100)',
        'Weight' => 'Int',
        'Age' => 'Int',
        'Height' => 'Decimal(5,2)',
        'Position' => 'Varchar(100)',
        'ActiveSince' => 'Date',
        'Nationality' => 'Varchar(50)',
        'Number' => 'Int'
    );

    private static $has_one = array(
        'Team' => 'Team',
        'Image' => Image::class,
    );

    private static $owns = array(
        'Image',
    );
}
