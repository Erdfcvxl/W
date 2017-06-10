<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class ReviewObject extends Model
{
    protected $fillable = [
        'id',
        'park_id',
        'object_id',
        'score',
        'comment',
        'created_at',
        'updated_at'
    ];
    protected $table = 'review_objects';

    public function getReviewObject($id) {
        return DB::table('review_objects')->where('id', $id)->first();
    }
}