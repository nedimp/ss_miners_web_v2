<?php


class RosterPage extends Page
{
     private static $url_segment = 'roster';
}

class RosterPageController extends PageController
{
    public function Teams()
    {
        return Team::get();
    }
}
