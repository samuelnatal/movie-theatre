<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'customerID';
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
    ];
}
