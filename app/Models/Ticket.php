<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $primaryKey = 'ticketID';
    protected $fillable = [
        'seat',
        'schedule_id',
        'customer_id',
        'payment_id',
    ];
}
