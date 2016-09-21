<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Get the difference in a human readable format in the current locale.
     *
     * @param $dates
     * @return string
     */
    public function getCreatedAtAttribute($dates)
    {
        return Carbon::createFromTimestamp(strtotime($dates))->diffForHumans();
    }

    /**
     * Get the difference in a human readable format in the current locale.
     *
     * @param $dates
     * @return string
     */
    public function getUpdatedAtAttribute($dates)
    {
        return Carbon::createFromTimestamp(strtotime($dates))->diffForHumans();
    }

}
