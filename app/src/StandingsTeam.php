<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class StandingsTeam extends DataObject
{
    private static $db = array(
        'Name' => 'Varchar(255)'
    );

    private static $has_one = array(
        'Logo' => Image::class
    );
}
