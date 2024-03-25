<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class StandingsElement extends BaseElement
{
    private static $singular_name = 'standings element';

    private static $plural_name = 'standings elements';

    private static $description = 'A standings table';

    public function getType()
    {
        return 'Standings Element';
    }

    public function Standings()
    {
        return Standings::get();
    }
}