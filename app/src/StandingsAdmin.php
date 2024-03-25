<?php

use SilverStripe\Admin\ModelAdmin;

class StandingsAdmin extends ModelAdmin
{
    private static $menu_title = 'Standings';

    private static $url_segment = 'standings';

    private static $managed_models = [
        Standings::class,
        StandingsTeam::class
    ];
}