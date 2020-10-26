<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Event extends Model
{
    protected $fillable = ['event_organizer', 'event_name', 'event_price', 'event_start', 'event_end'];
    use HasFactory;

    public function getEventStartAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d\TH:i');
    }

    public function getEventEndAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d\TH:i');
    }
}
