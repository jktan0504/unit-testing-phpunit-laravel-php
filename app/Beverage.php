<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
