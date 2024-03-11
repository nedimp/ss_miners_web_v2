<?php

use SilverStripe\ORM\DataObject;

class Team extends DataObject
{
    private static $db = array(
        'Name' => 'Varchar(255)',
    );

    private static $has_many = array(
        'Players' => 'Player',
    );
}