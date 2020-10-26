<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event_organizer', 'event_name', 'event_price', 
    'event_start', 'event_end'];
    use HasFactory;
}
