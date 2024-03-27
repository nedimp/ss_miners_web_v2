<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\TextField;

class NewsElement extends BaseElement
{
    private static $singular_name = 'news element';

    private static $plural_name = 'news elements';

    private static $description = 'An element with latest news';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        return $fields;
    }

    public function getType()
    {
        return 'News Element';
    }

    public function News()
    {
        return News::get();
    }
}