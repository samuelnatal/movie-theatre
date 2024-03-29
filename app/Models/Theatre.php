<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    use HasFactory;

    protected $primaryKey = 'theatreID';
    protected $fillable = [
        'theatre_name',
        'region_id'
    ];
}
