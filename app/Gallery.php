<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'id', 'parent_type', 'parent_idea', 'media_path', 'media_type'
    ];
    protected $table = 'gallery';


    public function getGallery($id)
    {
        return DB::table('gallery')->where('id', $id)->first();
    }
}