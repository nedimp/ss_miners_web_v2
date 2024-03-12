<?php

use SilverStripe\Admin\ModelAdmin;

class TeamAdmin extends ModelAdmin
{

    private static $menu_title = 'Teams';

    private static $url_segment = 'teams';

    private static $managed_models = [
        Team::class,
        Player::class
    ];
}