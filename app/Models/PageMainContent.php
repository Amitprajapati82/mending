<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageMainContent extends Model
{
   protected $fillable = ['title', 'description', 'images'];

   public function pageContents()
    {
        return $this->hasMany(PageContent::class, 'page_main_content_id');
    }

}
