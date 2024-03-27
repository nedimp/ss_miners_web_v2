<?php
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use DNADesign\Elemental\Models\BaseElement;

class SponsorRotator extends BaseElement {
    private static $many_many = [
        'Sponsors' => Sponsor::class,
    ];

    private static $singular_name = 'sponsor rotator';

    private static $plural_name = 'sponsor rotators';

    private static $description = 'A block that rotates sponsor logos';

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', GridField::create(
            'Sponsors',
            'Sponsors',
            $this->Sponsors(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }

    public function getType()
    {
        return $this->singular_name();
    }
}