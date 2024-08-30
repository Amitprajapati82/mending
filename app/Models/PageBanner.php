<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageBanner extends Model
{
    //
    protected $table = 'page_banners';

    public function pageContents()
    {
        return $this->hasMany(PageContent::class, 'banner_id');
    }
}
