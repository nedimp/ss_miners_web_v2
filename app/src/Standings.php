<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class Standings extends DataObject
{
    private static $has_one = array(
        'Team' => StandingsTeam::class,
    );
}
