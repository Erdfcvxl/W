<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewObject extends Model
{
    protected $fillable = [
        'id', 'name'
    ];
    protected $table = 'review_objects';

    public function getReviewObject($id) {
        return DB::table('review_objects')->where('id', $id)->first();
    }
}