<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    use HasFactory;

    private $frequencies = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $frequencies = [];
        $this->units()->each(function ($unit) use (&$frequencies) {
            $frequencies[] = $unit->alpha;
            $frequencies[] = $unit->bravo;
            $frequencies[] = $unit->chalie;
            $frequencies[] = $unit->delta;
            $frequencies[] = $unit->echo;
            $frequencies[] = $unit->foxtrot;
            $frequencies[] = $unit->golf;
            $frequencies[] = $unit->hotel;
            $frequencies[] = $unit->india;
            $frequencies[] = $unit->juliett;
            $frequencies[] = $unit->kilo;
            $frequencies[] = $unit->lima;
            $frequencies[] = $unit->mike;
            $frequencies[] = $unit->november;
            $frequencies[] = $unit->oscar;
            $frequencies[] = $unit->papa;
            $frequencies[] = $unit->quebec;
            $frequencies[] = $unit->romeo;
            $frequencies[] = $unit->sierra;
            $frequencies[] = $unit->tango;
            $frequencies[] = $unit->uniform;
            $frequencies[] = $unit->victor;
            $frequencies[] = $unit->whiskey;
            $frequencies[] = $unit->xray;
            $frequencies[] = $unit->yankee;
            $frequencies[] = $unit->zulu;
        });

        $this->frequencies = $frequencies;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function units()
    {
        return $this->hasMany(Unit::class);
    }

    /**
     * @param string $radio_type long_range|short_range
     * @return float
     */
    public function get_frequency(string $radio_type): float {
        switch ($radio_type) {
            case 'long_range':
                $range = [300, 870];
                break;
            case 'short_range':
                $range = [300, 5120];
                break;
            default:
                throw new \RuntimeException('unkown radio type: ' . $radio_type);
        }

        for ($i = 0; $i < 10; $i++) {
            $freq = (rand($range[0], $range[1]) / 10);
            if (!in_array($freq, $this->frequencies)) {
                $this->frequencies[] = $freq;
                return $freq;
            }
        }

        return 0;
    }
}
