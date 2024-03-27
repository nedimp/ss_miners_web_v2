<?php

use SilverStripe\Admin\ModelAdmin;

class NewsAdmin extends ModelAdmin
{
    private static $menu_title = 'News';

    private static $url_segment = 'news';

    private static $managed_models = [
        News::class
    ];
}