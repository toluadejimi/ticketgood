<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;


    protected $fillable = [

        'title',
        'qr_code',
        'valid_date',
        'status',
        'event_id',
        'r_amount',
        'r_qty',
        't_type',
        'email',
        'event_name',
        'user_id',

    ];





}
