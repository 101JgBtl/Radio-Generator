<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public const NATO_ALPHABETH = [
        'alpha'     => 'Alpha',
        'bravo'     => 'Bravo',
        'chalie'    => 'Chalie',
        'delta'     => 'Delta',
        'echo'      => 'Echo',
        'foxtrot'   => 'Foxtrot',
        'golf'      => 'Golf',
        'hotel'     => 'Hotel',
        'india'     => 'India',
        'juliett'   => 'Juliett',
        'kilo'      => 'Kilo',
        'lima'      => 'Lima',
        'mike'      => 'Mike',
        'november'  => 'November',
        'oscar'     => 'Oscar',
        'papa'      => 'Papa',
        'quebec'    => 'Quebec',
        'romeo'     => 'Romeo',
        'sierra'    => 'Sierra',
        'tango'     => 'Tango',
        'uniform'   => 'Uniform',
        'victor'    => 'Victor',
        'whiskey'   => 'Whiskey',
        'xray'      => 'X-Ray',
        'yankee'    => 'Yankee',
        'zulu'      => 'Zulu',
    ];


    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function frequncy()
    {
        return $this->belongsTo(Frequency::class);
    }
}
