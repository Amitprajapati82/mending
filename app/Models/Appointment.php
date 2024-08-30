<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = [
        'brand_id', 'device_id', 'issue_id', 'customer_name', 'customer_phone', 
        'customer_email', 'pincode', 'city_id', 'appointment_date', 
        'appointment_slot', 'status'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }
}
