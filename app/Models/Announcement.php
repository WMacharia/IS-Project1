<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $primaryKey = 'announcement_id';

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'venue',
        'time',
        'end_time',
    ];

    public function stallPayments()
    {
        return $this->hasMany(StallPayment::class, 'announcement_id');
    }

    public function getStallCountAttribute()
    {
        return $this->stallPayments()->count();
    }
    public function images()
{
    return $this->hasMany(AnnouncementImage::class, 'announcement_id', 'announcement_id');
}



}
