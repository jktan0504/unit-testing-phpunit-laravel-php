<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\MuslimCannotBuyAcholicBeverageException;

class Beverage extends Model
{
    protected $table ='beverages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type'
    ];

    // buy drink
    public function buyDrink() {
        if (auth()->user()->isMuslim()) {
            throw new MuslimCannotBuyAcholicBeverageException();
        }

        return true;
    }
}
