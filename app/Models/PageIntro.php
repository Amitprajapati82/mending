<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageIntro extends Model
{
    //
    protected $table = 'page_introductions';

    public function pageContents()
    {
        return $this->hasMany(PageContent::class, 'intro_id');
    }
}
