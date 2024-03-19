<?php

class ElementalPage extends Page
{
    private static $singular_name = 'Element Seite';
    private static $plural_name = 'Element Seiten';
    private static $description = 'Seite mit pflegbaren Elementen';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName([
            'Content',
        ]);

        return $fields;
    }
}
