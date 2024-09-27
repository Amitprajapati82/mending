<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = [
        'page_name', 'banner_id', 'intro_id','page_main_content_id', 'title', 'description', 'images',
        'meta_title', 'meta_description', 'meta_keywords', 'status'
    ];

    public function banner()
    {
        return $this->belongsTo(PageBanner::class, 'banner_id');
    }

    public function intro()
    {
        return $this->belongsTo(PageIntro::class, 'intro_id');
    }
    public function PageMainContent()
    {
        return $this->belongsTo(PageMainContent::class, 'page_main_content_id');
    }
}
