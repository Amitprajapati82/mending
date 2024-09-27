<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = ['name','status'];

    public function pageContents()
    {
        return $this->hasMany(PageContent::class, 'banner_id');
    }
}
