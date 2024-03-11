<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Dev\BuildTask;

class SeedDataTask extends BuildTask
{
    protected $title = 'Seed Dummy Data Task';

    protected $description = 'Seeds the database with dummy data for teams and players.';

    public function run($request)
    {
        // Seed Teams
        $seniors = Team::get()->filter(['Name' => 'Seniors'])->first() ?: Team::create(['Name' => 'Seniors']);
        $juniors = Team::get()->filter(['Name' => 'Juniors'])->first() ?: Team::create(['Name' => 'Juniors']);
        $cheerleaders = Team::get()->filter(['Name' => 'Cheerleaders'])->first() ?: Team::create(['Name' => 'Cheerleaders']);
        $sapphires = Team::get()->filter(['Name' => 'Sapphires'])->first() ?: Team::create(['Name' => 'Sapphires']);

        $this->saveIfNotExists($seniors);
        $this->saveIfNotExists($juniors);
        $this->saveIfNotExists($cheerleaders);
        $this->saveIfNotExists($sapphires);

        // Seed Players for Seniors
        $this->seedPlayer('John', 'Doe', 75, 25, 1.80, 'Forward', '2020-01-01', 'US', $seniors);
        $this->seedPlayer('Jane', 'Smith', 68, 23, 1.75, 'Midfielder', '2019-11-15', 'UK', $seniors);

        // Seed Players for Juniors
        $this->seedPlayer('Sam', 'Johnson', 70, 18, 1.75, 'Striker', '2021-02-10', 'CA', $juniors);
        $this->seedPlayer('Sophie', 'Taylor', 65, 17, 1.68, 'Defender', '2021-01-05', 'AU', $juniors);

        // Seed Players for Cheerleaders
        $this->seedPlayer('Chris', 'Martin', 60, 22, 1.72, 'Cheerleader', '2018-12-20', 'NZ', $cheerleaders);
        $this->seedPlayer('Emma', 'White', 55, 21, 1.65, 'Cheerleader', '2019-03-15', 'DE', $cheerleaders);

        // Seed Players for Sapphires
        $this->seedPlayer('David', 'Brown', 72, 20, 1.78, 'Attacker', '2020-08-28', 'FR', $sapphires);
        $this->seedPlayer('Olivia', 'Miller', 67, 19, 1.70, 'Midfielder', '2020-09-12', 'IT', $sapphires);

        echo 'Dummy data seeded successfully.' . PHP_EOL;
    }

    private function seedPlayer($firstName, $lastName, $weight, $age, $height, $position, $activeSince, $nationality, $team)
    {
        $player = Player::create([
            'FirstName' => $firstName,
            'LastName' => $lastName,
            'Weight' => $weight,
            'Age' => $age,
            'Height' => $height,
            'Position' => $position,
            'ActiveSince' => $activeSince,
            'Nationality' => $nationality,
            'TeamID' => $team->ID,
        ]);
        $this->saveIfNotExists($player);
    }

    private function saveIfNotExists(DataObject $record)
    {
        if (!$record->isInDB()) {
            $record->write();
        }
    }
}
