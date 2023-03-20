<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $primaryKey = 'scheduleID';

    protected $fillable = [
        'movie_id',
        'show_time',
        'screen_id',
        'theatre_id',
        'region_id',
        'price',
    ];

}
