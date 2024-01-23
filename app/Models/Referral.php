<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'given_name',
        'surname',
        'email',
        'phone',
        'home',
        'street',
        'suburb',
        'state',
        'postcode',
        'country',
    ];
}
